@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Barang yang tersedia</div>

                @foreach ($items as $item) 
                <div class="card-body">
                    <img src="{{$item->image}}" alt="Smiley face" align="left" style="height: 150px;  width: 150px;padding-right:10px">
                    <b >{{$item->title}}</b>
                    <p>{{$item->description}}</p>
                    <p>stok tersedia :{{$item->stock}}</p>
                    <p>harga         :{{$item->price}} $</p>                    
                    <form action="/buy" method='get'>
                        <input type="hidden" name='id' value="{{$item->id}}">
                    <input type="submit" class="btn btn-primary" value="Buy">
                    </form>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
