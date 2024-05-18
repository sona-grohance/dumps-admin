<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
    use HasFactory;
    protected $table="exam_details";
    protected $fillable=[
        'category_id',
        'sub_category_id',
        'exam_title',
        'exam_description_1',
        'exam_description_2'
    ];
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
