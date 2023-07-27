@extends('layouts.app')

@section('title', 'Form Penghuni')

@section('contents')
<form action="{{ isset($penghuni) ?route('penghuni.tambah.update', $penghuni->id):  route('penghuni.tambah.simpan')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($penghuni)?'Form Edit Penghuni':'Form Tambah Penghuni'}}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nomor_kamar">Nomor Kamar</label>
                        <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" value="{{ isset($penghuni) ? $penghuni->nomor_kamar : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_penghuni">Nama Penghuni</label>
                        <input type="text" class="form-control" id="nama_penghuni" name="nama_penghuni" value="{{ isset($penghuni) ? $penghuni->nama_penghuni : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_kamar">Kategori Kamar</label>
                        <input type="text" class="form-control" id="kategori_kamar" name="kategori_kamar" value="{{ isset($penghuni) ? $penghuni->kategori_kamar : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_penempatan">Tanggal Penempatan</label>
                        <input type="date" class="form-control" id="tanggal_penempatan" name="tanggal_penempatan" value="{{ isset($penghuni) ? $penghuni->tanggal_penempatan : '' }}">
                    </div>
                </div>
                <div class="card--footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection

