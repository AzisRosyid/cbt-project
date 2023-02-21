<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuestionOptions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'question_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'content' => [
                'type'       => 'TEXT',
                'null'       => false
            ],
            'option' => [
                'type' => 'ENUM("a", "b", "c", "d", "e")',
                'null' => false,
            ],
            'is_correct' => [
                'type'       => 'BOOLEAN',
                'null'       => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('question_id', 'questions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('question_options');
    }

    public function down()
    {
        $this->forge->dropTable('question_options');
    }
}
