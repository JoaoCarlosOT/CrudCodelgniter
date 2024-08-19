<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostsMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 150,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null' => false,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
