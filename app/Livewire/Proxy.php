<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Proxy as ModelsProxy;
use Livewire\Component;

class Proxy extends Component
{
    public function render()
    {
        $categories = Category::with('subcategories.subsubcategories')->get();
        $proxy=ModelsProxy::where('slug','proxy')->first();
        $proxies = ModelsProxy::where('slug','!=','proxy')->get();

        return view('livewire.proxy',[
            "proxy"=>$proxy,
            "proxies"=>$proxies,
        ])->layout('layouts.base-proxy',[
            "categories"=>$categories,
        ]);
    }
}
