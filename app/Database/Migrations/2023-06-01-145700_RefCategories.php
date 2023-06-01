<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefCategories extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'category_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => true,
			],
			'name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null'	=> false,
			],
			'created_at' => [
					'type'	=> 'DATETIME',
					'null'	=> true,
			],
			'updated_at' => [
					'type'	=> 'DATETIME',
					'null'	=> true,
			],
			'deleted_at' => [
					'type'	=> 'DATETIME',
					'null'	=> true,
			],
		]);
		$this->forge->addKey('category_id', true);
		$this->forge->createTable('ref_categories');
	}

	public function down()
	{
		$this->forge->dropTable('ref_categories');
	}
}
