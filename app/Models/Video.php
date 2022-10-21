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
        'tumbnail','category_id','slug',
    ];

    public function getTimeInHumanAttribute()
    {
        return gmdate("i:s",$this->value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
