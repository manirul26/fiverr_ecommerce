<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addroles extends Model
{
    use HasFactory;

    protected $fillable = [
        'rolesname',
        'modulename',
        'managmentpower',
        'teamstats',
        'followtheteam',
        'created_at',
        'updated_at',

    ];
    public function setCategoryAttribute($value)
    {
        $this->attributes['modulename'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['modulename'] = json_decode($value);
    }
}
