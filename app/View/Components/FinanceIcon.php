<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FinanceIcon extends Component
{

    public $iconTitle;
    public $bgColor;
    public $textColor;
    public $hoverColor;
    public $route;
    public function __construct( $iconTitle, $bgColor, $textColor, $hoverColor, $route)
    {
        //
        $this -> iconTitle = $iconTitle;
        $this -> bgColor = $bgColor;
        $this -> textColor = $textColor;
        $this -> hoverColor = $hoverColor;
        $this -> route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.finance-icon');
    }
}
