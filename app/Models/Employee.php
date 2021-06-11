<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Employee extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'employees';
    protected $fillable = [
        'id', 'name', 'no'
    ];
}