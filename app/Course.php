<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','description','start','end','tags','instructor_id'
    ];
    public function instructors(){
        return $this->belongTo('App\Instructor');
    }
}
