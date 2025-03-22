<?php

namespace App\Livewire\Pagina\Checkout;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.checkout.index');
    }
}
