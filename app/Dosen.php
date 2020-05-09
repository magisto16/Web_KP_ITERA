<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa');
    }
}
