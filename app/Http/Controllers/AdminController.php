<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function  show_dashboard():View
    {
        return view('admin.Dashboard', [
            'title' => "AdminDashboard",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_article():View
    {
        return view('admin.Article', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "article" => []
        ]);
    }
    public function  add_article():View
    {
        return view('admin.AddArticle', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_question():View
    {
        return view('admin.Question', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "questions" => []
        ]);
    }
    public function  show_category():View
    {
        return view('admin.Category', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  add_category():View
    {
        return view('admin.AddCategory', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_user():View
    {
        return view('admin.User', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "users" => []
        ]);
    }
    public function  add_user():View
    {
        return view('admin.AddUser', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_media():View
    {
        return view('admin.Media', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "medias" => []

        ]);
    }
    public function  add_media():View
    {
        return view('admin.AddMedia', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  show_tag():View
    {
        return view('admin.Tag', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin",
            "tags" => []
        ]);
    }
    public function  add_tag():View
    {
        return view('admin.AddTag', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
    public function  site_info():View
    {
        return view('admin.SiteInfo', [
            'title' => "Adminartivle",
            "time" => "time",
            "adminpath" => "admin"
        ]);
    }
}
