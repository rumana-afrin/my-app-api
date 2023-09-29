<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Customer extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'modified' => [
                'type' => 'TIMESTAMP',
                'null' => true, // Add the null constraint if desired
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50, // Set the maximum length for the status field
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('customers');
    }

    public function down()
    {
       
    }
}
