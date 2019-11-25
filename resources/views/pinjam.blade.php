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
                <div class="card-header">Buku yang akan dipinjam</div>

                <div class="card-body">
                    <form action="/pinjam" method='post'>
                    <h3 >{{$book->title}}</h3>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzhOhcDMaPKQ3IBlEoWQtXPSSr6fxV8FFEx0mnqOwf5f1faIHhsw&s" alt="Smiley face" align="left" >
                    <p>{{$book->description}}</p>
                    @csrf
                    Waktu pengembalian : <input type="date" name='date' value="">
                    <input type="hidden" name='book_id' value="{{$book->id}}">
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
