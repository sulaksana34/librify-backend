<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefSubCategoriesSeeder extends Seeder
{
	public function run()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->now = date('Y-m-d H:i:s');

		$data = [
			[
				'sub_category_id'	=> 1,
				'category_id'			=> 1,
				'name' 						=> 'Publikasi Umum, Informasi Umum dan Komputer',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 2,
				'category_id'			=> 1,
				'name' 						=> 'Bibiliografi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 3,
				'category_id'			=> 1,
				'name' 						=> 'Perpustakaan dan Informasi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 4,
				'category_id'			=> 1,
				'name' 						=> 'Ensiklopedia',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 5,
				'category_id'			=> 1,
				'name' 						=> 'Majalah dan Jurnal',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 6,
				'category_id'			=> 1,
				'name' 						=> 'Asosiasi, Organisasi dan Museum',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 7,
				'category_id'			=> 1,
				'name' 						=> 'Kutipan',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 8,
				'category_id'			=> 2,
				'name' 						=> 'Metafisika',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 9,
				'category_id'			=> 2,
				'name' 						=> 'Epistimologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 10,
				'category_id'			=> 2,
				'name' 						=> 'Pemikiran Filosofis',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 11,
				'category_id'			=> 2,
				'name' 						=> 'Psikologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 12,
				'category_id'			=> 2,
				'name' 						=> 'Filosofis Logis',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 13,
				'category_id'			=> 2,
				'name' 						=> 'Etik',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 14,
				'category_id'			=> 3,
				'name' 						=> 'Agama Islam',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 15,
				'category_id'			=> 4,
				'name' 						=> 'Ilmu Sosial, Sosiologi dan Antropologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 16,
				'category_id'			=> 4,
				'name' 						=> 'Statistik',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 17,
				'category_id'			=> 4,
				'name' 						=> 'Ilmu Politik',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 18,
				'category_id'			=> 4,
				'name' 						=> 'Ekonomi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 19,
				'category_id'			=> 4,
				'name' 						=> 'Hukum',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 20,
				'category_id'			=> 4,
				'name' 						=> 'Pendidikan',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 21,
				'category_id'			=> 4,
				'name' 						=> 'Perdagangan, Komunikasi dan Transportasi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 22,
				'category_id'			=> 5,
				'name' 						=> 'Bahasa Indonesia',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 23,
				'category_id'			=> 6,
				'name' 						=> 'Sains',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 24,
				'category_id'			=> 6,
				'name' 						=> 'Matematika',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 25,
				'category_id'			=> 6,
				'name' 						=> 'Astronomi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 26,
				'category_id'			=> 6,
				'name' 						=> 'Fisika',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 27,
				'category_id'			=> 6,
				'name' 						=> 'Kimia',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 28,
				'category_id'			=> 6,
				'name' 						=> 'Biologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 29,
				'category_id'			=> 6,
				'name' 						=> 'Zoologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 30,
				'category_id'			=> 7,
				'name' 						=> 'Teknologi',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 31,
				'category_id'			=> 8,
				'name' 						=> 'Literatur, Sastra, Retorika dan Kritik',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 32,
				'category_id'			=> 9,
				'name' 						=> 'Sejarah',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 33,
				'category_id'			=> 9,
				'name' 						=> 'Geografi dan Perjalanan',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 34,
				'category_id'			=> 9,
				'name' 						=> 'Biografi dan Asal-Usul',
				'created_at' 			=> $this->now,
			],
			[
				'sub_category_id'	=> 35,
				'category_id'			=> 9,
				'name' 						=> 'Sejarah Dunia Lama',
				'created_at' 			=> $this->now,
			],
		];

		$this->db->table('ref_sub_categories')->insertBatch($data);
	}
}
