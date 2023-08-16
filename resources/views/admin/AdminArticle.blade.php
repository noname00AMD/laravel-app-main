@extends('layout.AdminLayout') 
@section('content')
    <ul class="col-9">
        @foreach ($article as $item)
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
