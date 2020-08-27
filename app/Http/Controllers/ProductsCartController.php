<?php

namespace App\Http\Controllers;

use App\Products_Cart;
use App\Carts;
use Illuminate\Http\Request;

class ProductsCartController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(is_null($request->cart_id)){
            $cartsController = new CartsController;
            $cartVariable = $cartsController->store();
            $product = new Products_Cart;
            $product->cart_id = $cartVariable->id;
            $product->product_id = $request->product_id;
            $product->quantity = $request->quantity;
            $product->created_at = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
            $product->updated_at = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
            $product->save();
            return  $product;
        }else{
            $product = Products_Cart::create($request->all());
            return $product;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products_Cart  $products_Cart
     * @return \Illuminate\Http\Response
     */
    public function show($idProducCart)
    {
        $detail = Products_Cart::find($idProducCart);
        return $detail;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products_Cart  $products_Cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products_Cart $products_Cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products_Cart  $products_Cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_Cart $products_Cart)
    {
        //
    }
}
