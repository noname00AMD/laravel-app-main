<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminAddUser extends Component
{
   const PAGE_TITLE= "Admin Add Article";
  
    public function render()
    {
        return view('livewire.admin.AddUser',[     ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}