<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public function institutions() {
        return $this->hasMany('App\Institution');
    }
}
