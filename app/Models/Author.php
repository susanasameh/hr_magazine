<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $table = 'Auther';
    
    protected $fillabla = [
        'image',
        'approved',
        'desqription',
        'bio',
        'user_id',
    ]
}
