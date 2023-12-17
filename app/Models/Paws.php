<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paw extends Model
{
    protected $table = 'paws';

    protected $fillable = [
        'name', 'pawid', 'birthdate', 'gender', 'binaryfiles',
    ];

    // Assuming that 'created_at' and 'updated_at' columns are automatically managed by Eloquent.
    // If not, you may need to set public $timestamps = false; in the model.

    protected $casts = [
        'binaryfiles' => 'array',
        'birthdate' => 'date',
        'gender' => 'boolean',
    ];
}
