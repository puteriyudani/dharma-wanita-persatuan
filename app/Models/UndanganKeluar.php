<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganKeluar extends Model
{
    use HasFactory;

    protected $table = 'undangan_keluars';
    protected $guarded = [];
    protected $fillable = ['judul', 'tanggal', 'bulan', 'tahun', 'file'];
}
