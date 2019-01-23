<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article7 extends Model
{
    //
    protected $connection = 'mysql7';
    protected $table = "article7s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei7');
    }
}
