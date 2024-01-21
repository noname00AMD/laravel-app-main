<?php
 
namespace App\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 1;
    public $title, $slug;
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        // return view('livewire.counter')->extends("components.layouts.app");
    }
}