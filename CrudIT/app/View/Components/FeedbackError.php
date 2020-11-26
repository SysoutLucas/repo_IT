<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeedbackError extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.feedback-error');
    }
}
