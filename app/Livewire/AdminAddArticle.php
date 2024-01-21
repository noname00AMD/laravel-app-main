<?php
namespace App\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
 
class AdminAddArticle extends Component
{
    const PAGE_TITLE = "Admin Add Article";
    public $title ;
    public $slug ;
  
    public function text_to_slug(){
     $this-> slug =  Str::slug($this->title);
    }

 
    public function render()
    {
        return view('livewire.admin.AddArticle',[ 
            
    ])        ->layout("layouts.AdminLayout" , ["title"=>self::PAGE_TITLE]);
    }

}