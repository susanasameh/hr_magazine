<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    use HasFactory;

    protected $fillabla = [
        'title',
        'slug',
        'company',
        'city',
        'image',
        'deadline',
        'content',
        'email'
        'category_id',
        'employer_id',
    ]
}
