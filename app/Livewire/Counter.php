<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use App\Models\User;
 
class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

}