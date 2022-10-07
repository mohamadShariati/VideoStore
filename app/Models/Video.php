<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time',
        'description',
        'tumbnail',
    ];

    public function getTimeAttribute($value)
    {
        return gmdate("i:s",$value);
    }

    
}
