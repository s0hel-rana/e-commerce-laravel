<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $body;
    public $footer;

    public function __construct($title,$body,$footer)
    {
        $this->title = $title;
        $this->body = $body;
        $this->footer = $footer;
    }

    public function render()
    {
        return view('components.card');
    }
}
