@extends('user.layout')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th styles="width:50%">Product</th>
            <th styles="width:10%">Price</th>
            <th styles="width:8%">Quantity</th>
            {{-- <th styles="width:22%" class="text-center">Subtotal</th> --}}
            <th styles="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach (session('cart') as $id => $details)
                {{-- @php $total =+ $details['price'] * $details['quantity'] @endphp --}}
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{asset('img') }}/{{ $details['photo'] }}" width="100" height="100" class="img-responsive"></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rp {{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" max="1"/>
                    </td>
                    {{-- <td data-th="Subtotal" class="text-center">Rp {{ $details['price'] * $details['quantity'] }}k </td> --}}
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete </button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        {{-- <tr>
            <td colspan="5" style="text-align:right;"><h3><strong>Total Rp {{ $total }}k</strong></h3></td>
        </tr> --}}
        <tr>
            <td colspan="5" style="text-align:right;">
                <form action="/session" method="POST">
                    <a href="{{ route('products') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Continue Shopping </a>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout </button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                    _token: '{{csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents('tr').find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
        });
    });

    $(".cart_remove").click(function(e) {
        e.preventDefault();
        var ele = $(this);

        if(confirm('Do you really want to remove?')) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@endsection
