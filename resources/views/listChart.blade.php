@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Keranjang belanja</div>
                <form action="/checkout" method='post'>
                @if($chart)
                @csrf
  
                    @foreach ($chart as $item) 
                    <div class="card-body">
                        <input type="checkbox"  name="item_id[]" value="{{$item->item_id}}" align="left">
                        <img src="https://www.mcgill.ca/oss/files/oss/styles/hd/public/fish.png?itok=Ty_baHwK&timestamp=1538677144" alt="Smiley face" align="left" style="height: 150px;  width: 150px;padding-right:10px">
                        <b >{{$item->title}}</b>
                        <p>{{$item->description}}</p>
                        <p> Harga   : {{$item->price}} $</p>
                        Jumlah : <input type="number" name='number_of_items[$inc]' value="{{$item->number_of_items}}">
                    </div>
                    @endforeach
                    <input type="submit" class="btn btn-warning" value="Checkout" style="background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:10px;margin-bottom:10px">
                @else
                    <p align="center" >Keranjang belanja kososng</p>
                @endif
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
