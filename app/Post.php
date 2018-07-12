<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content' , 'username', 
    ];

    
   public function users()

   {
    return $this->belongsTo('App\Post', 'foreign_key');
   }
}
