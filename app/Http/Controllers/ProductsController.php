<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.products', compact('products'));
    }

    public function cart()
    {
        return view('user.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart',[]);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        Alert::success('Added Successfully', 'Product add to cart Successfully.');
        return redirect()->route('products');
        // return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            // session()->flash('success', 'Product successfully removed!');
            Alert::success('Remove Successfully', 'Product successfully removed!');
        }
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            // session()->flash('success', 'Cart successfully updated!');
            Alert::success('Changed Successfully', 'Cart Succesfully Updated!');
        }
    }
}
