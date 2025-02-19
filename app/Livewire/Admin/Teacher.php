<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Teacher extends Component
{



    // public function __construct()
    // {
    //     // $this->layouts = ''
    // }

    public function index()
    {
        // #[Layout('layout.admin')];
        return view('admin.teacher');
    }

    // public function index()
    // {
    //     return view('livewire.admin.teacher');
    // }
}
