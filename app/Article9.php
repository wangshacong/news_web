<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article9 extends Model
{
    //
    protected $connection = 'mysql9';
    protected $table = "article9s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei9');
    }
}
