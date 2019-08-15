<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function groups(){
        return $this->belongsTo(User::class);
    }
}
