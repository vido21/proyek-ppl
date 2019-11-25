<?php

namespace App\Http\Controllers;

use App\Books;
use App\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     * @param  \App\Books  $books
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Books $books)
    {
        return view('home',['books'=>$books->first()->get()]);
    }

       /**
     * Display a listing of the resource.
     *@param  \App\Borrow  $borrows
     * @return \Illuminate\Http\Response
     */
    public function peminjaman()
    {   
        try {
            $borrows =DB::table('borrows')
                ->join('books', 'books.id', '=', 'borrows.book_id')
                ->select('borrows.id as id','books.id as book_id','books.title as title','books.description as description','borrows.expired as expired')
                ->first();
            if ($borrows===null){
                return view('peminjaman',['borrows'=>0]);
            }

            $borrows =DB::table('borrows')
                ->join('books', 'books.id', '=', 'borrows.book_id')
                ->select('borrows.id as id','books.id as book_id','books.title as title','books.description as description','borrows.expired as expired')
                ->where('user_id','=',Auth::id())
                ->get();
            return view('peminjaman',['borrows'=>$borrows]);
        } catch (Exception $e) {
            return view('peminjaman',['borrows'=>0]);
        }
            
    } 
}
