<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BookMigration extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'title' => [
            'type'       => 'TEXT',
            'null' => false,
        ],
        'author' => [
            'type' => 'TEXT',
            'null' => false,
        ],
        'year' => [
            'type' => 'VARCHAR',
            'constraint' => '4',
            'null' => false,
        ],
        "created_at datetime default current_timestamp",
        "updated_at datetime on Update CURRENT_TIMESTAMP NULL default current_timestamp"

    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('tblbooks');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tblbooks');
    }
}
