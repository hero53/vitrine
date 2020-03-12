<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $fillable=['title','description'];

    public function Articles(){
        return $this->hasMany('App\Model\Article');
    }
}
