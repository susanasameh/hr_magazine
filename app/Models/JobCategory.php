<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Relations\HasMany;


class JobCategory extends Model
{
    use HasFactory,HasSlug;
    
    protected $table = 'JobCategory';

    protected $fillabla = [
        'category',
        'slug'
    ]


    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category')
            ->saveSlugsTo('slug');
    }

    public function JobDetail()
    {
    return $this->hasMany(JobDetail::class);
    }


}
