<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function institution() {
        return $this->belongsTo('App\Institution');
    }
    public function study_cycle() {
        return $this->belongsTo('App\StudyCycle');
    }
    public function area() {
        return $this->belongsTo('App\Area');
    }


}
