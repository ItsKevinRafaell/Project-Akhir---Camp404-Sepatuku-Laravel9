@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Produk</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('barang.index') }}" class="btn btn-primary mb-3">Kembali</a>
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul class="list-group">
                    Produk <input type="text" name="nama" required>
                    Brand <input type="text" name="brand" required>
                    Harga <input type="text"  name="harga" required>
                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                    <input name="foto" type="file" class="form-control" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection