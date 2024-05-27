<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminTag extends Component
{
   const PAGE_TITLE= "Admin Tag";
  
    public function render()
    {
        return view('livewire.admin.Tag',[ 
             "tags"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}