<?php

namespace App\Models;

use App\Livewire\Exam;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
    use HasFactory;
    protected $table="exam_details";
    protected $fillable=[
        'category_id',
        'sub_category_id',
        'sub_sub_category_id',
        'exam_title',
        'exam_description',
        'image',
        'exam_code',
        'languages',
        'exam_fee',
        'exam_format',
        'exam_duration',
        'page_type',
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

    public function knowledge()
    {
        return $this->hasMany(ExamKnowledge::class,'exam_id');
    }

    public function service()
    {
        return $this->hasOne(ExamService::class,'exam_id')->oldest('created_at');
    }

    public function stories()
    {
        return $this->hasMany(ExamSuccessStory::class,'exam_id');
    }

    public function faqs()
    {
        return $this->hasMany(ExamFAQ::class,'exam_id');
    }

    public function announcements()
    {
        return $this->hasMany(ExamAnnouncement::class,'exam_id');
    }

    public function banner()
    {
        return $this->hasOne(ExamBanner::class,'exam_id')->oldest('created_at');
    }
}
