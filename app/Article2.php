<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article2 extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = "article2s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei2');
    }
}
