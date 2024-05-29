<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamKnowledge extends Model
{
    use HasFactory;

    protected $fillable=[
        'exam_id',
        'question',
        'answer',
    ];

    public function exam()
    {
        return $this->belongsTo(ExamDetail::class,'exam_id');
    }
}
