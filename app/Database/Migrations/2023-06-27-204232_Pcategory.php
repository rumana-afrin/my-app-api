<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                 'type' => 'INT',
                 'constraint' => 5,
                 'unsigned' => true,
                 'auto_increment' => true,
            ],
            'name' => [
                 'type' => 'VARCHAR',
                 'constraint' => '200',
                 'dafault' => null,
            ],
            'size' => [
                 'type' => 'VARCHAR',
                 'constraint' => '250',
                 'dafault' => null,
            ],
            'status' => [
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'dafault' => null,
            ],
            'quantity' => [
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'dafault' => null,
            ],
           
           
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('category');
    }

    public function down()
    {
        
    }
}
