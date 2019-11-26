@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Keranjang belanja</div>
                @if($chart)
                    @foreach ($chart as $item) 
                    <div class="card-body">
                        <form action="/checkout" method='post'>
                        @csrf
                        <img src="https://www.mcgill.ca/oss/files/oss/styles/hd/public/fish.png?itok=Ty_baHwK&timestamp=1538677144" alt="Smiley face" align="left" style="height: 150px;  width: 150px;padding-right:10px">
                        <b >{{$item->title}}</b>
                        <p>{{$item->description}}</p>
                        <p> Harga   : {{$item->price}} $</p>
                        Jumlah : <input type="number" name='number_of_items' value="{{$item->number_of_items}}">
                        <input type="hidden" name='item_id' value="{{$item->item_id}}">
                        <input type="submit" class="btn btn-warning" value="Checkout">
                        </form>
                    </div>
                    @endforeach
                @else
                    <p align="center" >Keranjang belanja kososng</p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
