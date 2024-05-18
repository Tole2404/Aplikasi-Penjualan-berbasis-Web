<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faktur extends Model
{
    protected $table = 'faktur';
    protected $primaryKey = 'id_faktur';
    protected $fillable = ['id_faktur','id_pesan','tgl_faktur'];
}
