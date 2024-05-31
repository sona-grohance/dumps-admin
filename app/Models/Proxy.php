<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proxy extends Model
{
    use HasFactory;

    protected $fillable=[
        'category',
        'slug',
        'title',
        'banner_image',
        'table_contents',
        'description',
        'wp_image',
        'long_description',
        'read_contents',
    ];
}
