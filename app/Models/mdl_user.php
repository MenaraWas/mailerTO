<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdl_user extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table = 'mdl_users';
}
