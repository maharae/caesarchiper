<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Menonaktifkan koneksi database agar tidak error SQLSTATE
    protected $table = null;
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
    ];

    /**
     * PENTING: Override fungsi ini agar Laravel tidak mencari ID di database
     * saat memproses session di dashboard.
     */
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function getAuthIdentifier()
    {
        return $this->username;
    }
}
