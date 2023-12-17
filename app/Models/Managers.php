<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'managers';

    protected $fillable = [
        'username', 'email', 'password', 'salt'
    ];

    // Assuming that 'created_at' and 'updated_at' columns are automatically managed by Eloquent.
    // If not, you may need to set public $timestamps = false; in the model.

    protected $hidden = [
        'password', 'salt',
    ];
}
