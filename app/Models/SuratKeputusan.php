<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeputusan extends Model
{
    use HasFactory;

    protected $table = 'surat_keputusans';
    protected $guarded = [];
    protected $fillable = ['judul', 'periode', 'file'];
}
