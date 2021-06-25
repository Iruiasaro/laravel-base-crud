<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title', 
        'series',
        'thumb', 
        'price', 
        'type', 
        'sale_date', 
        'description', 
    ];
}