<?php

namespace App\Models;
use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessKey extends Model
{
    use HasFactory;

    public static function findd($key){
        $keyy = Arr::first(static::all(), fn($keys) => $keys['key'] == $key);
        return $keyy;
    }
}
