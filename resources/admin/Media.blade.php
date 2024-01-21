@extends('layout.AdminLayout')
@section('content')
<h2>Media list : </h2>
<ul class=" article_list">

    @foreach ($medias as $item)
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
