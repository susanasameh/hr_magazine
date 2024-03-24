<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplied extends Model
{
    use HasFactory;
    protected $fillabla =[
        'jobDetail_id',
        'jobSeeker_id',
    ]
}
