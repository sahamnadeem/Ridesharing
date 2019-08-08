<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
