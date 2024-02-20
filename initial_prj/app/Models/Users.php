<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Define the enum within the User model
    public $enum Role: string
    {
        case Admin = 'admin';
        case User = 'user';
        // Add more roles as needed
    }

    // Specify the enum type for the 'role' field in the $casts array
    protected $casts = [
        'role' => Role::class,
    ];

    // Other model code...
}