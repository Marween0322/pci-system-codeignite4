<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PCMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'brand' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'model' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'year' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
                'null' => false,
            ],
            'processor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'memory' => [
                'type' => 'INT',
                'null' => true,
            ],
            'storage' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'graphics_card' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime on update CURRENT_TIMESTAMP NULL default current_timestamp',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tblpcs');
    }

    public function down()
    {
        $this->forge->dropTable('tblpcs');
    }
}
