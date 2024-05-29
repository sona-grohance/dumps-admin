<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPassingReports extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'exam_code',
    ];
}
