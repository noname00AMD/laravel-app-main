<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;
use App\Livewire;

class AdminController extends BaseController
{
    /**
     * Show the profile for a given user.
     */
    public function  show_dashboard()
    {
        return view('admin.Dashboard', [
            'title' => "AdminDashboard",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_article()
    {
        return view('admin.Article', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "article" => []
        ]);
    }
    public function  add_article()
    {
        return view('admin.AddArticle', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_question()
    {
        return view('admin.Question', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "questions" => []
        ]);
    }
    public function  show_category()
    {
        return view('admin.Category', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  add_category()
    {
        return view('admin.AddCategory', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_user()
    {
        return view('admin.User', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "users" => []
        ]);
    }
    public function  add_user()
    {
        return view('admin.AddUser', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_media()
    {
        return view('admin.Media', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "medias" => []

        ]);
    }
    public function  add_media()
    {
        return view('admin.AddMedia', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_tag()
    {
        return view('admin.Tag', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "tags" => []
        ]);
    }
    public function  add_tag()
    {
        return view('admin.AddTag', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  site_info()
    {
        return view('admin.SiteInfo', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
}
