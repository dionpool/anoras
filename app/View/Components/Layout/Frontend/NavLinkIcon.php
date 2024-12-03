<?php

namespace App\View\Components\Layout\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLinkIcon extends Component
{
   public $route;
   public $variant;
   public $icon;

    /**
     * Create a new component instance.
     */
    public function __construct($route = null, $variant = 'fa', $icon = 'home')
    {
        $this->route = $route;
        $this->variant = $variant;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.frontend.nav-link-icon');
    }
}
