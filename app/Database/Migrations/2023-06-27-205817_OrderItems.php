<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'quantity' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'sub_total' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ]
        
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('order_id', 'order', 'id', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'newproduct', 'id', 'CASCADE');
        $this->forge->createTable('order_items');
    }

    public function down()
    {
        // $this->forge->dropForeignKey('order_id', 'order_items');
        // $this->forge->dropTable('order_items');
    }
}
