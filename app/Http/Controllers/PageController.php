<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    /**
     * Show the profile for a given user.
     */
    public function  home()
    {
        return view('home', [
            'title' => "aaa",
            "time" => "time"

        ]);
    }
    public function  about()
    {
        return view('about', [
            'title' => "aaa",
            "time" => "time"

        ]);
    }
}
