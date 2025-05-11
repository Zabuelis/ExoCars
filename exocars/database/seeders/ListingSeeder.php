<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $listings = [
            [
                'model' => '296',
                'mileage' => '17000',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '350000',
                'img_path' => '/images/listings/296_red',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.0',
                'power' => '448'
            ],
            [
                'model' => 'SF90',
                'mileage' => '14223',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2020',
                'color' => 'black',
                'price' => '650000',
                'img_path' => '/images/listings/sf90_black',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => 'SF90',
                'mileage' => '11342',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2020',
                'color' => 'yellow',
                'price' => '750000',
                'img_path' => '/images/listings/sf90_yellow',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '812',
                'mileage' => '33200',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2020',
                'color' => 'black',
                'price' => '670200',
                'img_path' => '/images/listings/812_black',
                'manufacturer' => 'Ferrari',
                'displacement' => '6.496',
                'power' => '588'
            ],
            [
                'model' => '812',
                'mileage' => '7932',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '700000',
                'img_path' => '/images/listings/812_red',
                'manufacturer' => 'Ferrari',
                'displacement' => '6.496',
                'power' => '588'
            ],
            [
                'model' => 'F40',
                'mileage' => '1249',
                'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed.',
                'make_year' => '2003',
                'color' => 'red',
                'price' => '3000000',
                'img_path' => '/images/listings/F40_red',
                'manufacturer' => 'Ferrari',
                'displacement' => '2.936',
                'power' => '351'
            ]
        ];

        foreach ($listings as $listing) {
            DB::table('car_listing')->insert($listing);
        }
    }
}
