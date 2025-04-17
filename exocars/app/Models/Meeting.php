<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public $timestamps = false;
    protected $table = 'meeting';

    protected $primaryKey = 'm_id';
    protected $keyType = 'int';

    protected $fillable = ['m_id', 'a_id', 'c_id', 'date', 'time'];
}
