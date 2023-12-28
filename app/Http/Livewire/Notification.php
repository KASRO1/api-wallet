<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    /**
     * @var \App\Notification
     */
    public $notification;

    /**
     * @var \App\Notification
     */
    public $list;

    /**
     * @var bool
     */
    public $openned = false;

    /**
     * @var string[]
     */
    protected $listeners = ['open'];

    /**
     * @param \App\Notification $notification
     */
    public function mount(\App\Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return bool
     */
    public function open()
    {
        $this->notification->update(['is_read' => true]);

        return $this->openned = ! $this->openned;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.notif-toast');
    }
}
