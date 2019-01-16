<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article3 extends Model
{
    //
    protected $connection = 'mysql3';
    protected $table = "article3s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei3');
    }
}
