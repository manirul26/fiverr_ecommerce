<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'productid',
        'date',
        'stock',
        'stockdescription',
        'created_at',
        'updated_at'

    ];
}
