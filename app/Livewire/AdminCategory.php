<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminCategory extends Component
{
    const PAGE_TITLE = "Admin Category";
  
    public function render()
    {
        return view('livewire.admin.Category',[ 
             "categories"=>[]
    ])        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
    }

}