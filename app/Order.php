<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'status'];

    public function details() {
        return $this->hasMany(OrderDetail::class);
    }
}
