@extends('layouts.app')

@section('title', 'Data Penghuni')

@section('contents')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penghuni</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('penghuni.tambah')}}" class="btn btn-primary mb-3">Input Data Penghuni</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kamar</th>
                        <th>Nama Penghuni</th>
                        <th>Kategori Kamar</th>
                        <th>Tanggal Penempatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($data as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->nomor_kamar }}</td>
                        <td>{{ $row->nama_penghuni }}</td>
                        <td>{{ $row->kategori_kamar }}</td>
                        <td>{{ $row->tanggal_penempatan }}</td>
                        <td>
                            <a href="{{ route('penghuni.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('penghuni.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
