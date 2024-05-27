@extends('layout.AdminLayout')
@section('content')
<h2>Question list : </h2>
<ul class=" article_list">
    @foreach ($questions as $item)
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
