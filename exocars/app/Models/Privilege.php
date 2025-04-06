<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'privilege';

    protected $primaryKey = 'a_id';
    protected $keyType = 'int';

    protected $fillable = ['p_id', 'privilege_name'];
}
