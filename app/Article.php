<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['gender','subcategory_id','price','description','model'];

    public function subcategorie(){
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }

    public function photos(){
        return $this->hasManyThrough(Photo::class,Color::class);
    }
    public function photo(){
        return $this->hasOneThrough(Photo::class,Color::class);
    }

    public function colors(){
        return $this->hasMany(Color::class);
    }
}


