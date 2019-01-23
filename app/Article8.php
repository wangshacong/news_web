<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article8 extends Model
{
    //
    protected $connection = 'mysql8';
    protected $table = "article8s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei8');
    }
}
