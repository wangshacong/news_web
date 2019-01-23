<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article10 extends Model
{
    //
    protected $connection = 'mysql10';
    protected $table = "article10s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei10');
    }
}
