<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table = 'tests';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'user_id',
        'start_time',
        'finish_time',
        'end_time',
        'status',
    ];
}