<?php

namespace App\View\Components\Layout\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($pageTitle = null)
    {
       // Title helper function to set page title dynamically.
       title($pageTitle);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.frontend.layout');
    }
}
