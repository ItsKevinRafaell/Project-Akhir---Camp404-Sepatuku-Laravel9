@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center mt-3">
        <div class="card w-50">
            <div class="card-header">
                <h3>Product</h3>
            </div>
            <div class="card-body">
                
                <a href="{{ route('barang.index')}}" class="btn btn-primary mt-2 mb-2">Kembali</a>
                <div class="row ml-2">
                    <h4 class="">Produk : {{$barang->nama}}</h4>
                  
                </div>
                <div class="row ml-2">
                    <h4 class="">Brand : {{$barang->brand}}</h4>
                 
                </div>
                <div class="row ml-2">
                    <h4 class="">Harga : {{$barang->harga}}</h4>
                   
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection