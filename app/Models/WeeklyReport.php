<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyReport extends Model
{
    use HasFactory;

        protected $fillable = [
            'waktu_pelaporan',
            'isi_laporan',
            'file_laporan',
    ];
//    protected $primaryKey = 'waktu_pelaporan';
}
