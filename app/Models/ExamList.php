<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamList extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_id',
        'category_name',
        'exam_tracks',
        'exam_question_number',
        'dump_coverage',
        'pass_dump_link',
        'free_test_link',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
