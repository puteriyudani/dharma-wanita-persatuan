<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    use HasFactory;

    protected $table = 'laporan_keuangans';
    protected $guarded = [];
    protected $fillable = ['judul', 'kategori', 'tahun', 'file'];
}
