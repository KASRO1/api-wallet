<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FAQ extends Component
{
    public $sectionIndex = null;
    public $questionIndex = null;

    protected $listeners = ['openSection', 'openQuestion'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.f-a-q');
    }

    /**
     * @param $sectionIndex
     */
    public function openSection($sectionIndex)
    {
        $this->questionIndex = null;
        $this->sectionIndex = $sectionIndex;
    }

    /**
     * @param $sectionIndex
     * @param $questionIndex
     */
    public function openQuestion($sectionIndex, $questionIndex)
    {
        $this->sectionIndex = $sectionIndex;
        $this->questionIndex = $questionIndex;
    }
}
