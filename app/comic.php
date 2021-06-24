<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'author',
        'description',
        'editor',
        'image',
        'vote'
    ];
}

