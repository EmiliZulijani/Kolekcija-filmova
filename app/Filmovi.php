<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Zanr;

class Filmovi extends Model
{
    protected $table = 'filmovi';
    public $timestamps = false;

    public function zanr()
    {
      return $this->belongsTo('App\Zanr');
    }
}
