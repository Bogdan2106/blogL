<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public static function active(){
        return static::where('status', 1)->get();
    }
}
