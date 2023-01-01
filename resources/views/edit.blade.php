@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Produk</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('barang.index') }}" class="btn btn-primary mb-3">Kembali</a>
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Produk <input type="text" name="nama" required value="{{ $barang->nama }}">
                    Brand <input type="text" name="brand" required value="{{ $barang->brand }}">
                    Harga <input type="text" name="harga" required value="{{ $barang->harga }}">
                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                    <input name="foto" type="file" class="form-control" required>
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection