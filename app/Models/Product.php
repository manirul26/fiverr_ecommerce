<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'productname',
        'permalink',
        'brandid',
        'categoriesid',
        'relatedproduct',
        'productimage',
        'sellingprice',
        'purchasingprice',
        'previousprice',
        'variablesstatus',
        'variables_size',
        'variables_type',
        'variables_value',
        'seo_address',
        'seo_slug',
        'seo_des',
        'seo_image',
        'created_at',
        'updated_at',

    ];
}
