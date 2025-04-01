<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    protected $table = 'meetings';

    protected $primaryKey = 'm_id';
    protected $keyType = 'int';

    protected $fillable = ['m_id', 'a_id', 'c_id', 'date', 'time'];
}
