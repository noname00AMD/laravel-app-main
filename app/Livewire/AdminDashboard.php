<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminDashboard extends Component
{
   const PAGE_TITLE = "Admin Dashboard";
  
    public function render()
    {
        return view('livewire.admin.Dashboard',[ ]) 
        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}