<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article6 extends Model
{
    //
    protected $connection = 'mysql6';
    protected $table = "article6s";

    public function fenlei()
    {
        return $this->belongsTo('App\Fenlei6');
    }
}
