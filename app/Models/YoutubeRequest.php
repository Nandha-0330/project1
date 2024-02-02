<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeRequest extends Model
{
    protected $fillable = [
        'transaction_id', 'package', 'username','url','request_for','email','image', 

    ];
}
