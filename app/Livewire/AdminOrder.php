<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminOrder extends Component
{
   const PAGE_TITLE= "Admin Order";
  
    public function render()
    {
        return view('livewire.admin.Order',[ "article"=>[] ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
    }

}