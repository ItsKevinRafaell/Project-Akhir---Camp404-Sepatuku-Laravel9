@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Data Produk</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('barang.create') }}" class="btn btn-primary mt-2 mb-4">Tambah Data Produk</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Foto</th>
                        <th>Produk</th>
                        <th>Brand</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($barang as $item)
                    <tr>
                        <td> <img src="{{ asset('fotoproduk/'.$item->foto) }}" style="width: 40px ; height:40px;" alt=""></td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->brand}}</td>
                        <td>{{ $item->harga}}</td>

                    <td>
                        <ul class="nav">
                            <a href="{{ route ('barang.show', $item->id)}}" class="btn btn-success me-2">Show</a>
                            <a href="{{ route('barang.edit', $item->id)}}" class="btn btn-primary me-2">Edit</a>
                            <form action="{{ route('barang.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                        </ul>
                    </td>
                </tr>
                    @endforeach
                
                </table>
            </div>
        </div>
    </div>
@endsection