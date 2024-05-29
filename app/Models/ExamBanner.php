<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamBanner extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_id',
        'sub_category_id',
        'sub_sub_category_id',
        'title',
        'description_one',
        'description_two'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }
}
