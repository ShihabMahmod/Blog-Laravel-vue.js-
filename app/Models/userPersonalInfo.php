<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userPersonalInfo extends Model
{
    use HasFactory;

    protected $table = "user_personal_info";
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'image'
    ];
}
