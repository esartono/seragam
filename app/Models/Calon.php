<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use QrCode;

class Calon extends Model
{
    protected $fillable = [
        'name',
        'kelas',
        'jk',
        'sekolah',
        'telepon',
        'email',
        'alamat',
        'jenjang',
        'atasan',
        'bawahan',
        'aktif',
        'lunas',
        'status',
        'no_order',
        'no_reg',
        'step',
    ];

    public function getQrcodeAttribute()
    {
        return base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate($this->no_order));
    }

    public function getLewatAttribute()
    {
        $otherDate = Carbon::create(2021, 4, 15, 0, 0, 0);

        $nowDate = Carbon::now();
        return $nowDate->gt($otherDate);
    }
}
