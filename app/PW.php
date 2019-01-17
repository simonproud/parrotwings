<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PW extends Model
{
    //
    protected $table = 'pws';
    protected $fillable = [
        'wallet', 'user_id'
    ];
}
