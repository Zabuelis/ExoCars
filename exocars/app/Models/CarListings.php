<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarListings extends Model
{
    protected $table = 'car_listings';

    protected $primaryKey = 'c_id';
    protected $keyType = 'int';

    protected $fillable = ['c_id', 'model', 'mileage', 'comments', 'make_year', 'color', 'price', 'img_path', 'manufacturer', 'displacement', 'power'];
}
