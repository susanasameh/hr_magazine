<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class JobDetail extends Model
{
    use HasFactory;

    
    protected $table = 'JobDetail';

    protected $fillable = [
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

    public function JobCategory(): BelongsTo
    {
        return $this->belongsTo(JobCategory::class);
    }
}
