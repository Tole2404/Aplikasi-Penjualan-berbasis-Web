<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detilpesan extends Model
{
    protected $table = 'detilpesan';
    protected $primaryKey = 'id_pesan';
    protected $fillable = ['id_pesan','id_produk','jumlah','harga'];
}
