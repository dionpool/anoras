<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
   public $class;
   public $title;
   public $url;
   public $label;

   /**
    * Create a new component instance.
    */
   public function __construct($class = null, $title = null, $url = null, $label = null)
   {
      $this->class = $class;
      $this->title = $title;
      $this->url = $url;
      $this->label = $label;
   }

   /**
    * Get the view / contents that represent the component.
    */
   public function render(): View|Closure|string
   {
      return view('components.card');
   }
}
