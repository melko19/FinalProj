<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $fillable = [
        'user_id','level','status'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public static function list(){
        $learners = Learner::orderByRaw('user_id')->get();
        $list = [];
        foreach($learners as $lrn){
            $list[$lrn->$id];
        }
        return $list;
    }
}
