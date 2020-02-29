<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';
    protected $fillable = [
        'id_transaksi','id_member','id_paket', 'qty', 'keterangan'
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

    public function Transaksi()
    {
        return $this->belongsTo('App\Transaksi', 'id_transaksi');
    }

    public function Paket()
    {
        return $this->belongsTo('App\Paket', 'id_paket');
    }
}
