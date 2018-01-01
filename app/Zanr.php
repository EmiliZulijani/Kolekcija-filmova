<?php

namespace App;
use App\Filmovi;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    protected $table = 'zanr';
    public $timestamps = false;

    public function filmovi(){
      return $this->hasMany('App\Filmovi', id_zanr);
    }
}
