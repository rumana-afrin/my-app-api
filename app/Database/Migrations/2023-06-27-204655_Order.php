<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Order extends Migration
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
            'customer_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'grand_total' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
               
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSQL('CURRENT_TIMESTAMP'),
            ],
            'modified' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSQL('CURRENT_TIMESTAMP'),
            ],
            'status' => [
                'type' => 'varchar',
                'constraint' => 100,
                'default' => null,
            ]


        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
        $this->forge->createTable('order');
    }

    public function down()
    {
        // $this->forge->dropForeignKey('customer_id', 'order');
        // $this->forge->dropTable('order');
    }
}
