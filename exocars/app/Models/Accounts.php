<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Accounts extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'accounts';

    protected $primaryKey = 'a_id';
    protected $keyType = 'int';

    protected $fillable = ['a_id', 'f_name', 'l_name', 'e_mail', 'p_id', 'password'];

    protected $hidden = ['password'];
}
