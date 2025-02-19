<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactUs extends Component
{

    public $title = '';

    public $content = '';

    public function save()
    {

        Log::debug("ContactUs updated $this->title");
    }

    public function render()
    {
        return view('contact-us');
    }
}
