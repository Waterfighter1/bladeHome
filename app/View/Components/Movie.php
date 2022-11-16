<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movie extends Component
{
    public $tag;
    public $conmovie;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tag, $conmovie)
    {
        $this->tag = $tag;
        $this->conmovie = $conmovie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie');
    }
}
