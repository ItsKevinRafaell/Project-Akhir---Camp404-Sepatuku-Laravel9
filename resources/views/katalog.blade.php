@extends('layouts.app')

@section('content')

<style>
    body {
background: #333;
}
</style>

    <div class="container d-flex justify-content-center">
        <div class="">
            <div class="card-header text-center mt-5 mb-5">
                <h2 class="text-white">Product</h2>
                <h5 class="text-white">List of the best and rare shoes with best quality, premium, and very cheap price</h5>
            </div>
          
                
            <div class="container mt-3">
                <div class="row ">
                    @foreach ($data as $barang)
                    <div class="col-lg-3 mb-3 ms-4 me-3">
                     
                        <div class="card" style="width: 18rem;">
                            <img class="text-center" src="{{ asset('fotoproduk/'.$barang->foto) }}" style="width: 80px ;margin-left:15px;"  alt="">
                            <div class="card-body">
                              <h5 class="card-title">{{$barang->nama}}</h5>
                              <i class="card-text">{{$barang->brand}}</i>
                              <p class="card-text">{{$barang->harga}}</p>
                            </div>
                          </div>
                    
                    </div>
                    @endforeach
                </div>
            </div>
                
              

       
            </div>
        </div>
    </div>
@endsection