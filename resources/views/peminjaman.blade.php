@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buku yang dipinjam</div>
                @if($borrows)
                    @foreach ($borrows as $borrow) 
                    <div class="card-body">
                        <form action="/pengembalian" method='post'>
                        @csrf
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzhOhcDMaPKQ3IBlEoWQtXPSSr6fxV8FFEx0mnqOwf5f1faIHhsw&s" alt="Smiley face" align="left">
                        <b >{{$borrow->title}}</b>
                        <p>{{$borrow->description}}</p>
                        <p>{{$borrow->expired}}</p>
                            <input type="hidden" name='book_id' value="{{$borrow->book_id}}">
                        <input type="submit" class="btn btn-warning" value="Kembalikan">
                        </form>
                    </div>
                    @endforeach
                @else
                    <p align="center" >Tidak ada buku yang dipinjam</p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
