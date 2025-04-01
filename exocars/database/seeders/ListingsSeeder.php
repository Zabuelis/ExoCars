<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $listings = [['c_id' => '1', 'model' => 'SF90', 'mileage' => '1249', 'comments' => 'Mint condition Ferrari SF90', 'make_year' => '2020', 'color' => 'red',
                        'price' => '250000', 'img_path' => 'somepath', 'manufacturer' => 'Ferrari', 'displacement' => '3.990', 'power' => '735'],
                     ['c_id' => '2', 'model' => 'SF90', 'mileage' => '1249', 'comments' => 'Mint condition Ferrari SF90', 'make_year' => '2020', 'color' => 'red',
                        'price' => '200000', 'img_path' => 'somepath', 'manufacturer' => 'Ferrari', 'displacement' => '3.990', 'power' => '735']
        ];

        foreach($listings as $listing){
            DB::table('car_listings')->insert($listing);
        }
    }
}
