<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardCard extends Component
{
    /**
     * Create a new component instance.
     */

        public $cardTitle;
        public $amount;
        public $textColor;
        public $bgColor;
    public function __construct($cardTitle, $amount, $textColor, $bgColor)
    {
        //
        $this ->cardTitle = $cardTitle;
        $this ->amount = $amount;
        $this ->textColor = $textColor;
        $this ->bgColor = $bgColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-card');
    }
}
