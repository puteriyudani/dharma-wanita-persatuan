<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';
    protected $guarded = [];
    protected $fillable = ['judul', 'tanggal', 'bulan', 'tahun', 'file'];
}
