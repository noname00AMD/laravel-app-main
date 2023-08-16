<?php
 
namespace App\Http\Controllers;
 
use App\Models\SiteInfo;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    /**
     * Show the profile for a given user.
     */
    public function  show_dashboard()
    {
        return view('admin.AdminDashboard',[ 'title' => "AdminDashboard",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  show_article()
    {
        return view('admin.AdminArticle',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin",
        "article"=>[]
    ]);
    }
    public function  add_article()
    {
        return view('admin.AdminAddArticle',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  show_category()
    {
        return view('admin.AdminCategory',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  add_category()
    {
        return view('admin.AdminAddCategory',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  show_user()
    {
        return view('admin.AdminUser',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  add_user()
    {
        return view('admin.AdminAddUser',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  show_media()
    {
        return view('admin.AdminMedia',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  add_media()
    {
        return view('admin.AdminAddMedia',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  show_tag()
    {
        return view('admin.AdminTag',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  add_tag()
    {
        return view('admin.AdminAddTag',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
    public function  site_info()
    {
        return view('admin.AdminSiteInfo',[ 'title' => "Adminartivle",
        "time"=>"time",
        "adminpath"=>"admin"]);
    }
}
