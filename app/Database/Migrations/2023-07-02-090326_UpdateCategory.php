<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateCategory extends Migration
{
    public function up()
    {
        $addFields = [
            'size' => [
                'name' => 'image',
                'type' => 'VARCHAR',
                'constraint' => '250',
                'dafault' => null,

            ]
        ];

        $this->forge->modifyColumn('category',$addFields);
    }

    public function down()
    {
        //
    }
}
