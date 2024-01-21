<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminAddMedia extends Component
{
    const PAGE_TITLE = "Admin Add Media";
  
    public function render()
    {
        return view('livewire.admin.AddMedia',[ 
    ])        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
    
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}