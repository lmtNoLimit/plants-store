<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $table = "order_detail";
    protected $fillable = ['order_id', 'product_id', 'quantity'];
}
