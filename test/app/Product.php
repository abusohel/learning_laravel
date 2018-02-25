<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
        protected $fillable = [

        'name', 'detail', 'admin_id'

    ];

        public function admin(){
	         return $this->belongsto(Admin::class);
        }

}