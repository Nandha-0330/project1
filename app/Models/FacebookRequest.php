<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookRequest extends Model
{
    protected $fillable = [
        'transaction_id', 'package', 'username','url','user_type','request_for','email',

    ];
}
