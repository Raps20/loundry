<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'nama', 'alamat','jenis_kelamin', 'tlp',
    ];

    public function Transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
    public function Detail()
    {
        return $this->hasMany('App\Detail');
    }
}

