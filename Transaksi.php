<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    public $timestamps = false;
    
    protected $fillable = ['id_transaksi', 'tanggal_transaksi', 'keterangan', 'id_pembeli'];
}
