<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminComment extends Component
{
   const PAGE_TITLE= "Admin Comment";
  
    public function render()
    {
        return view('livewire.admin.Comment',[ 
             "article"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}