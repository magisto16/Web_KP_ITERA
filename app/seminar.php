<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    protected $table = "seminar";
    protected $fillable = [
        'name', 'pelaksanaan', 'lokasi','nilai','disetujui'
    ];
    public function mahasiswa()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }
}
