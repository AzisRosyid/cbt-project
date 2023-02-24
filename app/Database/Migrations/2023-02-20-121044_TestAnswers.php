<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestAnswers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'test_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'question_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'option_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'is_submit' => [
                'type'       => 'BOOLEAN',
                'null'       => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('test_id', 'tests', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('question_id', 'questions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('option_id', 'question_options', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('test_answers');
    }

    public function down()
    {
        $this->forge->dropTable('test_answers');
    }
}
