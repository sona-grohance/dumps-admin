<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'sub_category_id',
        'name',
        'slug'
    ];
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
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
