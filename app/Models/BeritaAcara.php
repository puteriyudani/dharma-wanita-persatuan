<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $table = 'berita_acaras';
    protected $guarded = [];
    protected $fillable = ['judul', 'tanggal', 'bulan', 'tahun', 'file'];
}
