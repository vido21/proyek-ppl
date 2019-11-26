@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if (Session::has('success'))
                <div class="alert alert-success">
                <a >success</a>  
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">
                <a >error</a>  
                </div>
            @endif

            <div class="card">
                <div class="card-header">Tambahkan ke keranjang belanja</div>

                <div class="card-body">
                    <form action="/chart" method='post'>
                    @csrf
                    <h3 >{{$item->title}}</h3>
                    <img src="https://www.mcgill.ca/oss/files/oss/styles/hd/public/fish.png?itok=Ty_baHwK&timestamp=1538677144" alt="Smiley face" align="left" style="height: 150px;  width: 150px;padding-right:10px" >
                    <p>{{$item->description}}</p>
                    <p>Harga     : {{$item->price}}</p>
                    <p>Sisa stok : {{$item->stock}}</p>
                    Jumlah : <input type="number" name='number_of_items' value="{{$item->number_of_items}}">
                    <br>
                    <input type="hidden" name='item_id' value="{{$item->id}}">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-warning" value="Submit" >
                                                           
                    <button type="button" method="get" class="btn btn-danger" onclick="window.location.href='/home'" align="right">Cancel </button> 
                </form>                
                
            </div>

            </div>

        </div>
    </div>
</div>
@endsection
