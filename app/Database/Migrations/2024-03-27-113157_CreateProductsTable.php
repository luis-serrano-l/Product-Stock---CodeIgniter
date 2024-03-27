<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'auto_increment' => TRUE,
                ],
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 350,
                ],
                'qty' => [
                    'type' => 'INT',
                    'constraint' => 11,
                ],
                'created_at datetime default current_timestamp',
            ]
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
