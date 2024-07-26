<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopData extends Model
{
    use HasFactory;

    protected $guarded = null;

    public function User(){
        return $this->belongsTo(User::class);
    }
}
