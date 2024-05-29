<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable=[
        'category_name',
        'slug'
    ];
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function examDetail()
    {
        return $this->hasMany(ExamDetail::class);
    }

    public function exambanner()
    {
        return $this->hasMany(ExamBanner::class);
    }

    public function examlists()
    {
        return $this->hasMany(ExamList::class);
    }
}
