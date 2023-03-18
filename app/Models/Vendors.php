<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    protected $fillable = [
        'productid',
        'date',
        'stock',
        'created_at',
        'updated_at'

    ];
}
