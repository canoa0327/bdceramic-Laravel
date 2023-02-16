<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'detail_idx', 'data1', 'data2', 'data3', 'data4', 'data5', 'title', 'contents'
    ];
}
