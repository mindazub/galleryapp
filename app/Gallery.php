<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    
	/**
	 * The database table for the Gallery model
	 * 
	 * @var string
	 */
	
    protected $table = 'gallery';


    protected $fillable = ['name'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }

}
