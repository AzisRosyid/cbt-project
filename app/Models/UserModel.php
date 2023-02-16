<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'nip_nisn',
        'password',
        'nama',
        'level',
        'sebagai',
        'sekolah',
        'provinsi',
        'email',
        'tahu',
        'no_telp',
        'image'
    ];
}