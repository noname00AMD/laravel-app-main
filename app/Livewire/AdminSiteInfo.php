<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminSiteInfo extends Component
{
   const PAGE_TITLE= "Admin SiteInfo";
  
    public function render()
    {
        return view('livewire.admin.SiteInfo',[ 
             "SiteInfo"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}