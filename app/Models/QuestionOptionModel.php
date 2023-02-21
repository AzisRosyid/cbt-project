<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionOptionModel extends Model
{
    protected $table = 'question_models';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'test_id',
        'question_id',
        'answer',
        'is_filled',
        'is_submit',
    ];
}