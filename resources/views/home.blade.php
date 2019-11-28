@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Barang yang tersedia</div>

                @foreach ($items as $item) 
                <div class="card-body">
                    <img src="https://www.mcgill.ca/oss/files/oss/styles/hd/public/fish.png?itok=Ty_baHwK&timestamp=1538677144" alt="Smiley face" align="left" style="height: 150px;  width: 150px;padding-right:10px">
                    <b >{{$item->title}}</b>
                    <p>{{$item->description}}</p>
                    <p>stok tersedia :{{$item->stock}}</p>
                    <p>harga         :{{$item->price}} $</p>                    
                    <form action="/chart" method='get'>
                        <input type="hidden" name='id' value="{{$item->id}}">
                    <input type="submit" class="btn btn-primary" value="Tambah ke keranjang">
                    </form>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
