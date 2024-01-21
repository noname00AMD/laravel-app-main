<?php
namespace App\Livewire;
 
use Livewire\Component;
 
class AdminQuestion extends Component
{
     const PAGE_TITLE = "Admin Question";
  public $questions=[];
    public function render()
    {
        return view('livewire.admin.Question',[ 
    ]) ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
        // ->layout("components.layouts.admin" , ["title"=>$this->title]);
    }

}