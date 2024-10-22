<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'name',
        'project_manager',
        'total_member',
        'desc'
    ];
}
