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
                'c_id' => '1',
                'model' => 'SF90',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '250000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '2',
                'model' => 'SF90',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '3',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '4',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '5',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '6',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '7',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'c_id' => '8',
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/home/wallpapersden.com_ferrari-supercar-sports-car_1920x1080.jpg',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
        ];

        foreach ($listings as $listing) {
            DB::table('car_listing')->insert($listing);
        }
    }
}
