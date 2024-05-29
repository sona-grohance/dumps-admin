<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table="sub_categories";
    protected $fillable=[
        'category_id',
        'name',
        'slug'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subsubcategories()
    {
        return $this->hasMany(SubSubCategory::class);
    }
    public function exambanner()
    {
        return $this->hasMany(ExamBanner::class);
    }

    public function examDetail()
    {
        return $this->hasMany(ExamDetail::class);
    }
}
