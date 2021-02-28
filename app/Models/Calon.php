<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $fillable = [
        'name',
        'kelas',
        'jk',
        'sekolah',
        'telepon',
        'alamat',
        'aktif',
        'lunas',
        'status',
        'no_order',
        'no_reg',
    ];
}
