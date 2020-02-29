<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
       'id_outlet','id_member','id_user',
       'tgl','batas_waktu','tgl_bayar',
       'status','pembayaran','id_paket'
    ];

    public function Outlet()
    {
        return $this->belongsTo('App\Outlet', 'id_outlet');
    }

    public function Member()
    {
        return $this->belongsTo('App\Member', 'id_member');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function Paket()
    {
        return $this->belongsTo('App\Paket', 'id_paket');
    }

    public function Detail()
    {
        return $this->hasMany('App\Detail');
    }
}
