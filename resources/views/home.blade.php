@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buku yang tersedia</div>

                @foreach ($books as $book) 
                <div class="card-body">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzhOhcDMaPKQ3IBlEoWQtXPSSr6fxV8FFEx0mnqOwf5f1faIHhsw&s" alt="Smiley face" align="left">
                    <b >{{$book->title}}</b>
                    <p>{{$book->description}}</p>
                    <form action="/pinjam" method='get'>
                        <input type="hidden" name='id' value="{{$book->id}}">
                    <input type="submit" class="btn btn-primary" value="Pinjam">
                    </form>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
