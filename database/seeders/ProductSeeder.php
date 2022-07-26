<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'detail' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Max chip --
                the first Apple silicon designed for pros -- you get groundbreaking performance and amazing battery
                life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook,
                and all the ports you need, THe first notebook of its kind, this MacBook Pro is a beast',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_url' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'detail' => '13.4 inch, 8GB, DDR4 SDRAM 256GB ',
                'description' => 'PC power thats thin, Our lightest Galaxy Book yet gives you a powerful Intel 11th Gen
                Core processor, Intel Evo certification , and advanced AMOLED screen and comes equipped with our lastest
                wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color, Discover
                the perfect mix of portability and productivity',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_url' => 'storage/product2.png'
            ],
            [
                'name' => 'Dell Alien Ware',
                'detail' => '26 inch, 32GB, DDR5 SDRAM 4TB SSD ',
                'description' => 'PC power thats thin, Our Rogue work station yet gives you a powerful Intel 11th Gen
                Core processor, Intel Evo certification , Nvidia RTX3090Ti, and advanced AMOLED screen and comes equipped with our latest
                wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color, Discover
                the perfect mix of portability and productivity',
                'brand' => 'Dell',
                'price' => 5000,
                'shipping_cost' => 125,
                'image_url' => 'storage/alienware.jpg'
            ],
            [
                'name' => 'Iphone 12 Pro Max',
                'detail' => '16MP Rear Camera, 12MP Selfie Camera, 6.5 inch, 32GB, RAM 256GB ROM ',
                'description' => 'Great screen resolution, Awesome battery life, and advanced AMOLED screen and comes equipped with our latest
                wi-fi chip. Finish important projects, watch movies in brilliant color, Discover
                the perfect mix of portability and productivity',
                'brand' => 'Apple',
                'price' => 1200,
                'shipping_cost' => 30,
                'image_url' => 'storage/iphone-12.jpg'
            ],
            [
                'name' => 'Umidigi P33 Max',
                'detail' => '64MP Rear Camera, 24MP Selfie Camera, 6.5 inch, 64GB, RAM 128GB ROM ',
                'description' => 'Great screen resolution, Awesome battery life, and advanced AMOLED screen and comes equipped with our latest
                wi-fi chip. Finish important projects, watch movies in brilliant color, Discover
                the perfect mix of portability and productivity',
                'brand' => 'Umidigi',
                'price' => 950,
                'shipping_cost' => 25,
                'image_url' => 'storage/umidigi--p33.jpg'
            ],
            [
                'name' => 'Asus Zephrus Ware',
                'detail' => '13.6 inch, 16GB, DDR5 SDRAM 500GB SSD ',
                'description' => 'PC power thats thin, Our Rogue work station yet gives you a powerful Intel Xenon
                processor, Intel Evo certification , Nvidia RTX1090Ti, and advanced AMOLED screen and comes equipped with our latest
                wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color, Discover
                the perfect mix of portability and productivity',
                'brand' => 'Asus',
                'price' => 1400,
                'shipping_cost' => 45,
                'image_url' => 'storage/asus-mini.jpg'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
