<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class User extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'linkedinProfile',
        'githubProfile',
    ];
}
