<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = "Instansi";
    protected $fillable = ['name','alamat','telp','email'];

    public function mahasiswa()
    {
    	return $this->belongsToMany('App\Mahasiswa');
    }
}
