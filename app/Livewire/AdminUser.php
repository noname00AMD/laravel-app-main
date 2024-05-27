<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminUser extends Component
{
   const PAGE_TITLE = "Admin User";
  
    public function render()
    {
        return view('livewire.admin.User',[ 
             "users"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}