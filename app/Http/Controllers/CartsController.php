<?php

namespace App\Http\Controllers;

use App\Carts;
use Illuminate\Http\Request;
use DB;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')
                    ->join('statuses','statuses.id','=','carts.status_id')
                    ->select('carts.*','statuses.name')
                    ->get();
        return $carts;
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
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show($idCarts)
    {
        $cart = DB::table('carts')
                ->join('statuses','statuses.id','=','carts.status_id')
                ->select('carts.*','statuses.name')
                ->where('carts.id',$idCarts)
                ->get();
        return $cart;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carts $carts)
    {
        //
    }

}
