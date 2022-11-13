<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $image;
    public function __construct($name, $image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $name = $this->name;
        $image = $this->image;
        return view('components.product', compact('name', 'image'));
    }
}
