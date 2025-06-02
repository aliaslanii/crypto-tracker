<?php

namespace App\Livewire\V1\Dashboard;

use App\Models\CryptoCurrency;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.app')]
#[Title('Crypto')]
class Index extends Component
{
    #[Computed]
    public function crypto()
    {
        return CryptoCurrency::orderBy('price', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.v1.dashboard.index');
    }
}
