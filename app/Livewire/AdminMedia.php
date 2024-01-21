<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminMedia extends Component
{
   const PAGE_TITLE = "Admin Media";
  
    public function render()
    {
        return view('livewire.admin.Media',[ 
             "media"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}