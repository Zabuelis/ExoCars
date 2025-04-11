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
                'model' => 'SF90',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '250000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => 'SF90',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '262 GTS',
                'mileage' => '1249',
                'comments' => 'Mint condition Ferrari SF90',
                'make_year' => '2020',
                'color' => 'red',
                'price' => '200000',
                'img_path' => '/images/listings/1-8',
                'manufacturer' => 'Ferrari',
                'displacement' => '3.990',
                'power' => '735'
            ],
            [
                'model' => '296',
                'mileage' => '17',
                'comments' => 'Brand new Ferrari 296. Eye catching design with incredible power.',
                'make_year' => '2022',
                'color' => 'yellow',
                'price' => '350000',
                'img_path' => '/images/listings/9',
                'manufacturer' => 'Ferrari',
                'displacement' => '3',
                'power' => '610'
            ],
        ];

        foreach ($listings as $listing) {
            DB::table('car_listing')->insert($listing);
        }
    }
}
