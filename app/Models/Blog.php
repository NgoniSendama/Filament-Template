<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'image',
        'slug',
        'category_id',
        'description',
        'keywords',
        'meta_description',
    ];
    public function getRouteKeyName()
    {
        return 'slug'; // Use the 'slug' column for route model binding
    }
}
