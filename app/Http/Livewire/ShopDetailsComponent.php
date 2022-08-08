<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ShopDetailsComponent extends Component
{
    use WithPagination;
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $service = Service::where('slug', $this->slug)->first();
        $related_services = Service::where('category_id', $service->category_id)->inRandomOrder()->limit(8)->get();
        $popular_services = Service::inRandomOrder()->limit(8)->get();
        return view('livewire.shop-details-component',['service' => $service, 'related_services' => $related_services, 'popular_services' => $popular_services]);
    }
}
