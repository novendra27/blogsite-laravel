<?php

namespace App\View\Components\Home;

use Closure;
use App\Models\User;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Aside extends Component
{
    public $categories;
    public $authors;

    public function __construct($categories, $authors)
    {
        $this->categories = $categories;
        $this->authors = $authors;
    }

    public function render(): View|Closure|string
    {
        return view('components.home.aside');
    }
}
