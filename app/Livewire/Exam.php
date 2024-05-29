<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ExamPassingReports;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Livewire\Component;

class Exam extends Component
{
    public $type;
    public $slug;
    public $data;

    public function mount($type, $slug)
    {
        $this->type = $type;
        $this->slug = $slug;

        $this->fetchData();
    }

    public function fetchData()
    {
        switch ($this->type) {
            case 'category':
                $this->data = Category::where('slug', $this->slug)->first();
                break;
            case 'subcategory':
                $this->data = SubCategory::where('slug', $this->slug)->first();
                break;
            case 'subsubcategory':
                $this->data = SubSubCategory::where('slug', $this->slug)->first();
                break;
            default:
                $this->data = null;
        }
    }
    
    public function render()
    {
        $categories = Category::with('subcategories.subsubcategories')->get();
        $reports = ExamPassingReports::all();
        $banner = $this->data->exambanner->first();
        $examDetail = $this->data->examDetail->first();

        return view('livewire.exam',[
            "banner" => $banner,
            "examDetail" => $examDetail,
            "reports" => $reports,
            "type" => $this->type,
        ])->layout('layouts.base-exam',[
            "categories"=>$categories,
        ]);
    }
}
