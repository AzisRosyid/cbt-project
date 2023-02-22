<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tests extends Migration
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
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'start_time' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'finish_time' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'end_time' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'status' => [
                'type'       => 'ENUM("stand_by", "on_test", "finished")',
                'null'       => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tests');
    }

    public function down()
    {
        $this->forge->dropTable('tests');
    }
}
