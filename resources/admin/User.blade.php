@extends('layout.AdminLayout')
@section('content')
<h2>User list : </h2>
<ul class=" article_list">

    @foreach ($users as $item)
    {
    <li style="margin: 20px 0; fontSize: 2rem">
        <a href={{ '/' . $item->post_slug }}>
            {{ $item->post_title }}
        </a>
    </li>
    }
    @endforeach
</ul>
@endsection
