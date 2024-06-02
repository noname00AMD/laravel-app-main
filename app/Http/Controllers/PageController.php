<?php

namespace App\Http\Controllers;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SiteInfo;
use Illuminate\View\View;
use App\Models\Category;


class PageController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function  home(Request $request,Response $response):View
    {
        // Log::info('Hi there!');
        // $data = "home";
        // $etag = md5(json_encode($data));

        // // Check if the client's ETag matches the current ETag
        // if ($request->header('If-None-Match') === $etag) {
        //     // Return 304 Not Modified response
        //     return $response(null, 304);
        // }

        
        // $object="A";
        // Debugbar::info($object);
        return view('home', [
            'title' => "aaa",
            "time" => "time",
            

        ]);
    }
    public function  about():View
    {
        return view('about', [
            'title' => "aaa",
            "time" => "time"

        ]);
    }
    public function  category():View
    {
        return view('category', [
            'title' => "aaa",
            "time" => "time",
            "categories"=>[]

        ]);
    }




















    public function  test():View
    {
        return view('test', [
            'title' => "aaa",
            "time" => "time"
        ]);
    }
    public function  name(Request $request):View
    {
        return view('htmx.test', [
            'name' => $request->name
        ]);
    }
}
