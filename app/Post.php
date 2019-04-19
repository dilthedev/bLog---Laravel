<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //If u want to change table name
        //protected $table = 'posts';
    //primary key
        //public $primaryKey = 'item_id';
    //Timestampo
        //public $timestamp = true;


        public function user(){
            return $this->belongsTo('App\User');
        }
}
