<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';
    protected $fillable = [
        'id_outlet','nama', 'alamat', 'tlp',
    ];

    // protected $keyType = 'string';

   

    public function User()
    {
    	return $this->hasMany('App\User');
    }

    public function Paket()
    {
        return $this->hasMany('App\Paket');
    }

    public function Transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
}
