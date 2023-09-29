<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jamdani extends Migration
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
                 'category' => [
                      'type' => 'VARCHAR',
                      'constraint' => '200',
                      'dafault' => null,
                 ],
                 'title' => [
                      'type' => 'VARCHAR',
                      'constraint' => '250',
                      'dafault' => null,
                 ],
                 'price' => [
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'dafault' => null,
                 ],
                 'd_price' => [
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'dafault' => null,
                 ],
                
                 'description' => [
                      'type' => 'VARCHAR',
                      'constraint' => '250',
                      'dafault' => null,
                 ],
                 'image' => [
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'dafault' => null,
                 ],
                 'sku' => [
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
            $this->forge->createTable('jamdani');
       
    }

    public function down()
    {
        //
    }
}
