{{-- @extends('layouts.AdminLayout')
@section("title",$title)
@section('content') --}}
<div class="col-span-9 col-start-4 ">

<h2>Tags list : </h2>
<ul class=" tags_list">

    @foreach ($tags as $item)
    {
    <li style="margin: 20px 0; fontSize: 2rem">
        <a href={{ '/' . $item->post_slug }}>
            {{ $item->post_title }}
        </a>
    </li>
    }
    @endforeach
</ul>
</div>
{{-- @endsection --}}
