<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminArticle extends Component
{
   const PAGE_TITLE= "Admin Article";
  
    public function render()
    {
        return view('livewire.admin.Article',[ 
             "article"=>[]
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}