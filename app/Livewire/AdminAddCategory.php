<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminAddCategory extends Component
{
  const PAGE_TITLE="Admin Add Category";
    public function render()
    {
        return view('livewire.admin.AddCategory',[     ])        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);

        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}