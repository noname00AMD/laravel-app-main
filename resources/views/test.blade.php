@extends('layout.HomeLayout')
@section('content')

<form hx-post="/name" hx-target="#names" hx-swap="beforeend">
    @csrf
    <input type="text" name="name" class=" shadow-2xl text-gray-900 rounded-lg p-6 placehoder:text-gray-400"
        placeholder="Enter your name">
    <input type="submit" class="shadow-2xl dark:bg-gray-900 text-gray-500 p-6 rounded-lg cursor-pointer" />
</form>

{{-- New item are added inside this div --}}
<div id="names" class="">
</div>
@endsection
