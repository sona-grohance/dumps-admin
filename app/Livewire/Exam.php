<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ExamDetail;
use App\Models\ExamPassingReports;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Livewire\Component;

class Exam extends Component
{
    public $type;
    public $slug;
    public $data;
    public $examDetail;

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
                if ($this->data) {
                    $this->examDetail = ExamDetail::where('category_id', $this->data->id)
                        ->where('page_type', $this->type)
                        ->first();
                }
                break;
            case 'subcategory':
                $this->data = SubCategory::where('slug', $this->slug)->first();
                if ($this->data) {
                    $this->examDetail = ExamDetail::where('sub_category_id', $this->data->id)
                        ->where('page_type', $this->type)
                        ->first();
                }
                break;
            case 'subsubcategory':
                $this->data = SubSubCategory::where('slug', $this->slug)->first();
                if ($this->data) {
                    $this->examDetail = ExamDetail::where('sub_sub_category_id', $this->data->id)
                        ->where('page_type', $this->type)
                        ->first();
                }
                break;
            default:
                $this->data = null;
        }
    }

    public function render()
    {
        $categories = Category::with('subcategories.subsubcategories')->get();
        $reports = ExamPassingReports::all();

        return view('livewire.exam', [
            "examDetail" => $this->examDetail,
            "reports" => $reports,
            "type" => $this->type,
        ])->layout('layouts.base-exam', [
            "categories" => $categories,
        ]);
    }
}
