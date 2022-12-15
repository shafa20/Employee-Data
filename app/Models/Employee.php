<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'country',
        'name',
        'address',
        'phone',
        'fax',
        'email',
        'url',
        'date',
        'logo',

    ];
}
