@extends('layouts.HomeLayout')
@section('content')
    {{--
<link rel="stylesheet" href="/css/homebody.css"> --}}
    <div class="search_body grid grid-cols-12 gap-4 ">

        <div class="col-start-1 col-span-12 ">

            <x-topAds />
        </div>


        <section class="col-span-12">
            <div class=" grid grid-cols-12 gap-4 2xl:px-44 xl:container xl:mx-auto " style="margin-bottom: 40px">
                <div class="col-span-8 col-start-2">
                    <ul>
{{-- table --}}
                        @foreach ($categories as $category)
                        @if ($category->visible)

                        <li>
                            <span> {{ $category->id }}/</span>
                            <a href="{{$category->slug}}">
                                <span> {{ $category->cate_name }}/</span>
                            </a>
                                <span>
                                    {{$category->slug}}/
                                </span>
                                <span>{{$category ->discription}}/</span>
                                <span>{{$category ->size}}</span>
                        </li>
                        @endif
                            
                        @endforeach

                    </ul>

                </div>
                <div class="col-span-4 col-start-10">
                    <x-AdPanelSideBar />
                </div>
            </div>

        </section>
    </div>
@endsection
