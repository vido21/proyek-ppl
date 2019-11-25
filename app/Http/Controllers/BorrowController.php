<?php

namespace App\Http\Controllers;

use App\Borrow;
use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \App\Borrow  $borrows
     *@param  \App\Books  $books
     *@param Illuminate\Http\Request $request;
     * @return \Illuminate\Http\Response
     */
    public function index(Books $books,Request $request)
    {
        if (!Auth::check()){return Redirect::intended("/login"); }
        return view('pinjam',['book'=>$books->where('id','=',$request->id)->first()]);        
    }   

    /**
     * Show the form for creating a new resource.
     *@param Illuminate\Http\Request $request;
     * @return \Illuminate\Http\Response
     *@param  \App\Borrow  $borrows
     *@param  \App\Books  $books
     */
    public function create(Borrow $borrow,Books $books,Request $request)
    {   
        if (!Auth::check()){
            return Redirect::intended("/login"); 
        }
        
        if($borrow->where('book_id','=',$request->book_id)->first()===null){
    
            $borrow->insert(
                ['user_id' => Auth::user()->id,
                 'book_id' => $request->book_id,
                 'expired' => $request->date
                ]
            );
            return redirect()->back()->with('success', ['success']); 
    
        }
        else{
            return redirect()->back()->with('error', ['error']); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Borrow  $borrow
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow,Request $request)
    {
        if (!Auth::check()){
            return Redirect::intended("/login"); 
        }
        
        $id=$borrow->where('user_id','=',Auth::id())->where('book_id','=',$request->book_id)->first()->id;
        $borrow = $borrow->find($id)->delete();
        return redirect()->back();
    }
}
