<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'nip_nisn' => [
                'type'       => 'VARCHAR',
                'constraint' => '18',
                'unique'     => true,
                'null'       => false
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
                'null'       => false
            ],
            'level' => [
                'type' => 'ENUM("Admin", "User")',
                'null' => false,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            'sebagai' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            'sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            'provinsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
                'unique'     => true
            ],
            'tahu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false
            ],
            // 'no_telp' => [
            //     'type'       => 'VARCHAR',
            //     'constraint' => '255',
            //     'null'       => true
            // ],
            // 'image' => [
            //     'type'       => 'VARCHAR',
            //     'constraint' => '255',
            //     'null'       => true
            // ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
