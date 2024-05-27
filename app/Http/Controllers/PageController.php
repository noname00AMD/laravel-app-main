<?php

namespace App\Http\Controllers;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SiteInfo;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
 
class PageController extends BaseController
{
    /**
     * Show the profile for a given user.
     */
    // public function  home(Request $request,Response $response)
    // {
    //     // Log::info('Hi there!');
    //     // $data = "home";
    //     // $etag = md5(json_encode($data));

    //     // // Check if the client's ETag matches the current ETag
    //     // if ($request->header('If-None-Match') === $etag) {
    //     //     // Return 304 Not Modified response
    //     //     return $response(null, 304);
    //     // }

        
    //     // $object="A";
    //     // Debugbar::info($object);
    //     return view('home', [
    //         'title' => "aaa",
    //         "time" => "time",
            

    //     ]);
    // }
    // public function  about()
    // {
    //     return view('about', [
    //         'title' => "aaa",
    //         "time" => "time"

    //     ]);
    // }
    // public function  category()
    // {
    //     return view('category', [
    //         'title' => "aaa",
    //         "time" => "time",
    //         "categories"=>[]

    //     ]);
    // }




















    public function  test()
    {
        return view('test', [
            'title' => "aaa",
            "time" => "time"
        ]);
    }
    public function  name(Request $request)
    {
        return view('htmx.test', [
            'name' => $request->name
        ]);
    }
}
