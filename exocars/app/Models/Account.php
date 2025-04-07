<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Account extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'account';

    protected $primaryKey = 'a_id';
    protected $keyType = 'int';

    protected $fillable = ['a_id', 'f_name', 'l_name', 'e_mail', 'p_id', 'password'];

    protected $hidden = ['password'];
}
