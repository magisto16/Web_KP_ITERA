<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table='catatans';
    protected $fillable = [
        'laporan_id','catatan'
    ];
    public function laporans(){
        return $this->belongsTo('App\Laporan');
    }
}
