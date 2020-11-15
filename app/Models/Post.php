<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function likes(){
        return $this -> hasMany('\App\Models\Like');
    }
        public function author(){
            return $this -> belongsTo('\App\Models\User');
    }
    public function categories (){
        return $this -> belongsToMany('\App\Models\Category');
}
public function comments (){
    return $this -> hasMany('\App\Models\Comment');
}
}