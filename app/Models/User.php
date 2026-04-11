<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Menonaktifkan koneksi database agar tidak error SQLSTATE
    protected $table = 'pengguna';
    public $timestamps = true;

    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * PENTING: Override fungsi ini agar Laravel tidak mencari ID di database
     * saat memproses session di dashboard.
     */
    public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function getAuthIdentifier()
    {
        return $this->email;
    }
}
