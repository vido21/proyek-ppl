<?php

namespace App\Http\Controllers;

use App\Chart;
use App\User;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \App\User  $user 
     *@param  \App\Chart  $chart
     *@param  \App\Items  $items
     *@param Illuminate\Http\Request $request;
     * @return \Illuminate\Http\Response
     */
    public function index(Items $items,Request $request,User $user)
    {
        if (!Auth::check()){return Redirect::intended("/login"); }
        return view('chart',['item'=>$items->where('id','=',$request->id)->first()]);        
    }   

    /**
     * Show the form for creating a new resource.
     *@param Illuminate\Http\Request $request;
     * @return \Illuminate\Http\Response
     *@param  \App\Chart  $chart
     *@param  \App\Items  $items
     *@param  \App\User  $user
     */
    public function create(Chart $chart,Items $items,Request $request,User $user)
    {   
        if (!Auth::check()){
            return Redirect::intended("/login"); 
        }
        
        // if($chart->where('item_id','=',$request->item_id)->first()===null){
    
            // $chart->insert(
            //     ['user_id' => Auth::user()->id,
            //      'item_id' => $request->item_id,
            //      'number_of_items' => $request->number_of_items
            //     ]
            // );
        $stok=$items->where('id','=',$request->item_id)->first()->stock;
        $newstok=(int)$stok-(int)$request->number_of_items;
        $items->where('id',$request->item_id)->update(['stock'=>$newstok] );

        $itemPrice=(int)$stok*(int)$request->number_of_items;
        $newBalance=(int)Auth::user()->balance-(int)$itemPrice;
        $user->where('id',Auth::user()->id)->update(['balance'=>$newBalance] );
        return redirect()->back()->with('success', ['success']); 
    
        // }
        // else{
        //     return redirect()->back()->with('error', ['error']); 
        // }
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
     * @param  \App\Chart  $chart
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart,Request $request)
    {
        if (!Auth::check()){
            return Redirect::intended("/login"); 
        }
        
        $id=$chart->where('user_id','=',Auth::id())->where('item_id','=',$request->item_id)->first()->id;
        $chart = $chart->find($id)->delete();
        return redirect()->back();
    }
}
