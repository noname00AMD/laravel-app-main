<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminAddTag extends Component
{
   const PAGE_TITLE= "Admin Add Tag";
  
    public function render()
    {
        return view('livewire.admin.AddTag',[ 
    ])        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
    
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}