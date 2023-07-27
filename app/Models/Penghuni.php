<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $table = 'penghuni';

    protected $fillable = ['nomor_kamar', 'nama_penghuni', 'kategori_kamar', 'tanggal_penempatan'];
}
