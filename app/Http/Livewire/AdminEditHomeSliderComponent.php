<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $image;
    public $status;
    public $newImage;
    public $slider_id;

    public function mount($slide_id){
        $slider = HomeSlider::find($slide_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    }
    public function updateSlide(){
        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->status = $this->status;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('sliders', $imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        return redirect()->route('admin.homeslider');
        session()->flash('message', 'Slider has been updated Successfully');
    }

    public function render()
    {
        return view('livewire.admin-edit-home-slider-component');
    }
}