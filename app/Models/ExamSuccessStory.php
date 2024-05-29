<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSuccessStory extends Model
{
    use HasFactory;
    protected $table="success_stories";

    protected $fillable=[
        'exam_id',
        'name',
        'description',
    ];

    public function exam()
    {
        return $this->belongsTo(ExamDetail::class,'exam_id');
    }
}
