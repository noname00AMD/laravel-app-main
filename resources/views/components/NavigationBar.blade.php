<?php
 $link_list = [

[
    "href"=> "/" . config("app.admin_path"),
    "className"=> "",
    "textLink"=> "Dashboard"
],
[
    "href" =>"/" . config("app.admin_path") . "/article",
    "className"=> "",
    "textLink"=> "Articles",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/article/add",
            "className"=> "",
            "textLink"=> "New Articles",
        ]
    ]
    ],
[
    "href"=> "/" . config("app.admin_path") . "/question",
    "className"=> "",
    "textLink"=> "Question",
],
[
    "href"=> "/" . config("app.admin_path") . "/order",
    "className"=> "",
    "textLink"=> "Order",
],
[
    "href"=> "/" . config("app.admin_path") . "/comment",
    "className"=> "",
    "textLink"=> "Comment",
],
[
    "href"=> "/" . config("app.admin_path") . "/category",
    "className"=> "",
    "textLink"=> "Category",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/category/add",
            "className"=> "",
            "textLink"=> "   New Category",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/user",
    "className"=> "",
    "textLink"=> "User",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/user/add",
            "className"=> "",
            "textLink"=> "   New User",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/media",
    "className"=> "",
    'textLink'=> "Media",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/media/add",
            "className"=> "",
            "textLink"=> "   New Media",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/tag",
    'className'=> "",
    "textLink"=> "Tags",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/tag/add",
            "className"=> "",
            "textLink"=> "   New Tag",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/siteinfo",
    "className"=> "",
    "textLink"=> "Site Info"
],


]
?>
<div class="col-span-3">
    <ul class="navigationBar">
        <li style="margin-bottom=> 22px">
            <a href="/">
                Back to Home
            </a>
        </li>
        @foreach ($link_list as $link)
        <li>
            <a href={{$link["href"]}}>
                {{$link["textLink"]}}
                @if (isset($link["child"]))
                <ul>
                    @foreach ($link["child"] as $child)
                    <li>
                        <a href= {{$child["href"]}}>
                            {{$child["textLink"]}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </a>
        </li>
        @endforeach
        {{-- <li>
            <a href= '/' . env("ADMIN_PATH", "admin" )>
                Admin Dashboard
            </a>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/article' ]]>
                Articles
            </a>
            <ul>
                <li>
                    <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/article/add' ]]>
                        New Article
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/question' ]]>Questions</a>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/category' ]]>
                Category
            </a>
            <ul>
                <li>
                    <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/category/add' ]]>
                        New Category
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/user' ]]>
                User
            </a>
            <ul>
                <li>
                    <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/user/add' ]]>
                        New User
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/media' ]]>
                Media
            </a>
            <ul>
                <li>
                    <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/media/add' ]]>
                        New Media
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/tag' ]]>
                Tag
            </a>
            <ul>
                <li>
                    <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/tag/add' ]]>
                        New Tag
                    </a>

                </li>
            </ul>
        </li>
        <li>
            <a href=[[ '/' . env("ADMIN_PATH", "admin" ) . '/siteinfo' ]]>
                Site info
            </a>
        </li> --}}
    </ul>
</div>
