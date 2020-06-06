<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $name;

    public function mount()
    {
        $this->name = 'Didik';
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function increment()
    {
        $this->count++;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function decrement()
    {
        $this->count--;
    }

    public function incrementNumber($number)
    {
        $this->count += $number;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.counter');
    }
}
