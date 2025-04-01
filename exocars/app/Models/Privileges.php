<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    protected $table = 'privileges';

    protected $primaryKey = 'a_id';
    protected $keyType = 'int';

    protected $fillable = ['p_id', 'privilege_name'];
}
