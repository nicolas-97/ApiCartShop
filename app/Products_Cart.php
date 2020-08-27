<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_Cart extends Model
{
    protected $fillable = ["cart_id","product_id","quantity"];
}
