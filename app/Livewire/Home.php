<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Testimonial;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
         $categories = Category::with('subcategories.subsubcategories')->get();
         $testimonials = Testimonial::limit(3)->get();
         $sliders = HomeSlider::all();

        return view('livewire.home',[
            'testimonials' => $testimonials,
            'sliders' => $sliders,
        ])->layout('layouts.base',[
            "categories"=>$categories,
        ]);
    }
}
