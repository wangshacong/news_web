<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article4 extends Model
{
    //
    protected $connection = 'mysql4';
    protected $table = "article4s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei4');
    }
}
