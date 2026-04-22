<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\DD;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    //nama kolom yang bisa diisi
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit'];
    //nama primary key
    protected $primaryKey = 'id_buku';

    public $timestamps = true;
}
