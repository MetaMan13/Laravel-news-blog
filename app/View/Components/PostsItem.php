<?php

namespace App\View\Components;

use Illuminate\View\Component;
use stdClass;

class PostsItem extends Component
{
    public $userName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts.posts-item');
    }
}
