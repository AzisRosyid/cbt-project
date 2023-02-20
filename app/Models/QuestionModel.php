<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'content',
        'type',
        'category'
    ];
}