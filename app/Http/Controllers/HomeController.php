<?php

namespace App\Http\Controllers;

use App\Items;
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
     * @param  \App\Items  $items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Items $items)
    {
        return view('home',['items'=>$items->first()->get()]);
    }

       /**
     * Display a listing of the resource.
     *@param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function keranjang()
    {   
        try {
            $chart =DB::table('chart')
                ->join('items', 'items.id', '=', 'chart.item_id')
                ->select('chart.id as id','items.id as item_id','items.title as title','items.description as description','chart.number_of_items as number_of_items')
                ->first();
            if ($chart===null){
                return view('listChart',['chart'=>0]);
            }

            $chart =DB::table('chart')
                ->join('items', 'items.id', '=', 'chart.item_id')
                ->select('chart.id as id','items.id as item_id','items.price as price','items.title as title','items.description as description','chart.number_of_items as number_of_items')
                ->where('user_id','=',Auth::id())
                ->get();
            return view('listChart',['chart'=>$chart]);
        } catch (Exception $e) {
            return view('listChart',['chart'=>0]);
        }
            
    } 
}
