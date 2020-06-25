<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable=['name','article_id'];

  public function photos(){
      return $this->hasMany(Photo::class);
  }
}
