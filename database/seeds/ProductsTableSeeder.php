<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1 TB ssd, 32Gb RAM',
            'price' => 1700000,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minus excepturi beatae 
            quo atque eligendi quos tempore mollitia eum ea porro autem.',

        ]);
        Product::create([
            'name' => 'Lenovo Pro',
            'slug' => 'lenovo-pro',
            'details' => '15 inch, 1 TB ssd, 32Gb RAM',
            'price' => 1700000,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minus excepturi beatae 
            quo atque eligendi quos tempore mollitia eum ea porro autem.',

        ]);
        Product::create([
            'name' => 'Hp Pro',
            'slug' => 'hp-pro',
            'details' => '15 inch, 1 TB ssd, 32Gb RAM',
            'price' => 1700000,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minus excepturi beatae 
            quo atque eligendi quos tempore mollitia eum ea porro autem.',

        ]);
        Product::create([
            'name' => 'Accer Pro',
            'slug' => 'accer-pro',
            'details' => '15 inch, 1 TB ssd, 32Gb RAM',
            'price' => 1700000,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minus excepturi beatae 
            quo atque eligendi quos tempore mollitia eum ea porro autem.',

        ]);
        Product::create([
            'name' => 'AZUS Pro',
            'slug' => 'azus-pro',
            'details' => '15 inch, 1 TB ssd, 32Gb RAM',
            'price' => 1700000,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minus excepturi beatae 
            quo atque eligendi quos tempore mollitia eum ea porro autem.',

        ]);
    }
}
