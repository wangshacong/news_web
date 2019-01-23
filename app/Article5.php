<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article5 extends Model
{
    //
    protected $connection = 'mysql5';
    protected $table = "article5s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei5');
    }
}
