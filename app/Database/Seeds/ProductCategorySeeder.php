<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $categories = ['Elektronik', 'Pakaian', 'Perabotan'];

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'product_id'    => $faker->numberBetween(1, 3), // karena hanya ada 3 produk
                'category_name' => $faker->randomElement($categories),
                'description'   => $faker->sentence,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => null
            ];

            print_r($data); // hanya untuk melihat hasil di terminal
            $this->db->table('product_category')->insert($data);
        }
    }
}
