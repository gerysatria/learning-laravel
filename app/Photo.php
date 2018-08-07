<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';
    protected static $placeholder = '/images/placeholder.jpg';
    
    protected $fillable = ['file'];
    
//    public function __construct(){}
    
    public function getFileAttribute($photo){
        
        return $this->uploads . $photo;
    }
    
    public function getPlaceholderAttribute(){
        
        return self::$placeholder;
    }
    
    public function post(){
        return $this->hasOne('App\Post');
    }
    
}
