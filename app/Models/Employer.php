<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    
    protected $table = 'Employer';
    
    protected $fillable =[
        'name',
        'address',
        'logo',
        'phone',
        'user_id'
    ]
}
