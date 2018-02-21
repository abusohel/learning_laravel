<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
        protected $fillable = [

        'name', 'detail'

    ];

        public function admin(){
	return $this->belongsto(Admin::class);
   }

}