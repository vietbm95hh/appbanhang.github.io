<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttonAdd extends Component
{
    /**
     * Create a new component instance.
     *
     * 
     */
    public $link;
    public $name;
    public $class;

     public function __construct($link='',$name ='', $class='')
    {
        $this->link = $link;
        $this->name = $name;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-add');
    }
}
