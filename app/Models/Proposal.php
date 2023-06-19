<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctrum\HasApiTokens;

class Proposal extends Model
{
    use HasFactory, Notifiable;

        // @var array<int, string>
    protected $fillable = [
            'name',
            'email',
            'nama_kegiatan',
            'bentuk_kegiatan',
            'penyelenggara',
            'kredit',
            'kedudukan_penyelenggara',
            'deskripsi_umum',
            'rekognisi',
            'batas_akhir_pendaftaran',
            'tanggal_mulai_pelaksanaan',
            'tanggal_akhir_pelaksanaan',
            'model_pelaksanaan',
            'metode_pelaksanaan',
            'persyaratan'
    ];
}
