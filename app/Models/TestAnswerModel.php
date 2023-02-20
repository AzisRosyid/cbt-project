<?php

namespace App\Models;

use CodeIgniter\Model;

class TestAnswerModel extends Model
{
    protected $table = 'test_answers';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'content',
        'type',
        'category'
    ];
}