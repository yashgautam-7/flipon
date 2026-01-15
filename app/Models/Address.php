<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = [
        'user_id', 'address','city','state','country','pincode','is_default'
    ];
}
