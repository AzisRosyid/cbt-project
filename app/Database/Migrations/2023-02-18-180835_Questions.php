<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Questions extends Migration
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
            'content' => [
                'type'       => 'TEXT',
                'null'       => false
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            'category' => [
                'type' => 'ENUM("Numerical Logic", "Basic Aritmethic", "Numberical Word Problems", "Numerical Reasoning", "Mathematical Knowledge", "Number Rows")',
                'null' => false,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('questions');
    }

    public function down()
    {
        $this->forge->dropTable('questions');
    }
}
