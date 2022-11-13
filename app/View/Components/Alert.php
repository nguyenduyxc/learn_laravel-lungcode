<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public function __construct($type='danger')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // cach 1 truyen dl qua cho view
        // $type = 'success';

        // cach 2: lay tren __construct
        $type = $this->type;
        return view('components.alert', compact('type'));
    }
}
