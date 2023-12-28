<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LandingSlider extends Component
{
    public $slide = 0;

    protected $listeners = ['openSlide'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.landing-slider');
    }

    /**
     * @param $slide
     */
    public function openSlide($slide)
    {
        $this->slide = $slide;
    }
}
