<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GitHubUser extends Model
{
    //
    protected $table = 'github_users';

    protected $fillable = [
        'github_id',
        'name',
        'email',
        'github_token',
        'github_refresh_token',
    ];
}
