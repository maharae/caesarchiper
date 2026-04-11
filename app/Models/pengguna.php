<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    // nama tabel di pgAdmin
    protected $table = 'pengguna';

    // untuk primary key (samakan dengan di db)
    protected $primaryKey = 'id';

    //  id_pengguna auto-increment, pastikan ini true (defaultnya true)
    public $incrementing = true;

    // 4. Daftarkan kolom yang boleh diisi (mass assignment)
    protected $fillable = ['email', 'password'];

    public $timestamps = true;
}
