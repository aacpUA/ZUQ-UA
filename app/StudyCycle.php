<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyCycle extends Model
{
    //
    public function courses() {
        return $this->hasMany('App\Course');
    }
}
