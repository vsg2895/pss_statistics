<?php

namespace App\View\Components\Datepicker;

use Illuminate\View\Component;

class DefaultFilters extends Component
{
    public string $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datepicker.default-filters');
    }
}
