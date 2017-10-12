<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "foods";
    protected $fillable = ["name","image","description","price","discount","category_id"];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id','id');
    }

}
