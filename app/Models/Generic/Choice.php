<?php

namespace App\Models\Generic;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public $timestamps = false;

    protected $hidden = [
        'id',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];
}
