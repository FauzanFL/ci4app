<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
	public function run()
	{
		// $data = [
		// 	[
		// 		'nama' 		 => 'Fauzan Fashihul Lisan',
		// 		'alamat' 	 => 'Jl. ABC No. 18',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'nama' 		 => 'Deddy Ferdiansyah',
		// 		'alamat' 	 => 'Jl. A No. 1',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'nama' 		 => 'Erik',
		// 		'alamat' 	 => 'Jl. A No. 12',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	]

		// ];

		$faker = \Faker\Factory::create('id_ID');
		for ($i = 0; $i < 100; $i++) {
			$data = [
				'nama' 		 => $faker->name,
				'alamat' 	 => $faker->address,
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()
			];
			$this->db->table('orang')->insert($data);
		}
		// simple query
		// $this->db->query(
		// 	"INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
		// 	$data
		// );

		// Using query builder
		// $this->db->table('orang')->insertBatch($data);
	}
}
