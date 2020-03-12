<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
   public  $fillable=['title','category_id','img','article'];

   public function category(){
       return $this->belongsTo(Category::class);
   }
}
