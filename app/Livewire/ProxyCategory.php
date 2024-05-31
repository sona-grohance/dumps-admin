<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Proxy;
use Livewire\Component;

class ProxyCategory extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $categories = Category::with('subcategories.subsubcategories')->get();
        $proxy = Proxy::where('slug', $this->slug)->first(); 
        $proxies = Proxy::where('slug', '!=', 'proxy')->get();

        return view('livewire.proxy-category', [
            "proxies" => $proxies,
            "proxy" => $proxy, // If needed in the view
        ])->layout('layouts.base-proxy', [
            "categories" => $categories,
        ]);
    }
}