<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerintahTugas extends Model
{
    use HasFactory;

    protected $table = 'surat_perintah_tugas';
    protected $guarded = [];
    protected $fillable = ['judul', 'tahun', 'file'];
}
