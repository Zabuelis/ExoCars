<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarListing extends Model
{
    protected $table = 'car_listing';

    protected $primaryKey = 'c_id';
    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = ['c_id', 'model', 'mileage', 'comments', 'make_year', 'color', 'price', 'img_path', 'manufacturer', 'displacement', 'power'];
}
