<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ExamDetail;
use App\Models\HomeSlider;
use App\Models\Logo;
use App\Models\News;
use App\Models\Testimonial;
use Livewire\Component;
use Illuminate\Support\Str;

class Home extends Component
{
    public function render()
    {
         $categories = Category::with('subcategories.subsubcategories')->get();
         $testimonials = Testimonial::limit(3)->get();
         $news = News::limit(3)->get();
         $exams = ExamDetail::limit(3)->latest()->get();
         foreach ($exams as $exam) {
            $exam->short_description = Str::limit(strip_tags($exam->exam_description), 250, '...');
         }
         $sliders = HomeSlider::all();
         $logo = Logo::get()->first();

        return view('livewire.home',[
            'testimonials' => $testimonials,
            'sliders' => $sliders,
            'logo' => $logo,
            'exams' => $exams,
            'news' => $news,
        ])->layout('layouts.base',[
            "categories"=>$categories,
        ]);
    }
}
