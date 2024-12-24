<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserList extends Model
{
    //
        protected $table = '_user_list';
        protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];


}
