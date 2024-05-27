<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;

class HtmxController extends BaseController
{
    /**
     * Show the profile for a given user.
     */
    public function  admin_dashboard()
    {
        return view('htmx.dashboard', []);
    }
}
