<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //


	public function getRouteKeyName(){
	      return 'slug';
	  }
	
    public function profile(){
    	return $this->belongsTo(Profile::class);
    }



  //   public function post(){
  //   return $this->belongsTo(Post::class);
  // }

  //   public function Contents(){
  //     return $this->hasMany(Content::class);
  // }

  // public function categories(){
  //     return $this->belongsToMany(Category::class)->withTimestamps();
  // }
}
