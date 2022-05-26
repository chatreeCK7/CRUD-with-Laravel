<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function find($slug){
        if(!file_exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        // returncache()->remember("posts.{$slug}",1200, fn() => file_get_contents($path));
    
    }
    use HasFactory;

}
