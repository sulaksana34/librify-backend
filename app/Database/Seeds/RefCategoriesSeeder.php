<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefCategoriesSeeder extends Seeder
{
	public function run()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->now = date('Y-m-d H:i:s');

		$data = [
			[
				'category_id'	=> 1,
				'name' 				=> 'Umum',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 2,
				'name' 				=> 'Filsafat dan Psikologi',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 3,
				'name' 				=> 'Keagamaan',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 4,
				'name' 				=> 'Sosial',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 5,
				'name' 				=> 'Bahasa',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 6,
				'name' 				=> 'Sains dan Matematika',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 7,
				'name' 				=> 'Teknologi',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 8,
				'name' 				=> 'Literatur dan Sastra',
				'created_at' 	=> $this->now,
			],
			[
				'category_id'	=> 9,
				'name' 				=> 'Sejarah dan Geografi',
				'created_at' 	=> $this->now,
			],
		];

		$this->db->table('ref_categories')->insertBatch($data);
	}
}
