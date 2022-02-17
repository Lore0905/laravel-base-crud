<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'thumb',
        'description',
        'price',
        'series',
        'type',
        'sale_date'
    ];
    protected $table = 'comics';
}
