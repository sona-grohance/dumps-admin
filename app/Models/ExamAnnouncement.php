<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnnouncement extends Model
{
    use HasFactory;

    protected $fillable=[
        'exam_id',
        'title_one',
        'date',
        'title_two',

    ];

    public function exam()
    {
        return $this->belongsTo(ExamDetail::class,'exam_id');
    }
}
