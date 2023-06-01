<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefSubCategories extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'sub_category_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => true,
			],
			'category_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'null'					 => true,
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
		$this->forge->addKey('sub_category_id', true);
		$this->forge->createTable('ref_sub_categories');
	}

	public function down()
	{
		$this->forge->dropTable('ref_sub_categories');
	}
}
