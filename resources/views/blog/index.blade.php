@extends('layouts.app')
@section('content')

@if(session()->has('message'))
<div class="mb-3 inline-flex w-full items-center rounded-lg bg-success-100 px-6 py-5 text-base text-success-700" role="alert">
    <span class="mr-2 h-4 w-4 fill-current">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
      </svg>
    </span>
    {{session()->get('message')}}
  </div>
@endif

<div class="container m-auto text-center pt-10 pb-5 ">
    <h1 class="text-5xl font-bold">All Posts</h1>
</div>

@if(Auth::check())
<div class="container sm:grid mx-auto py-10 px-20 border-b border-gray-300 ">
<a class="bg-gray-700 text-gray-100 py-3 px-4 rounded-lg font-bold uppercase text-l place-self-start hover:bg-gray-500" href="/blog/create">Create a post</a>
</div>
@endif
<!-- Show data on the post page -->

@foreach ($posts as $post)
<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-10 px-20 border-b border-gray-300 ">
    <div class="flex">
        <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-3xl py-5 md:pt-0">{{$post->title}}</h2>
        <div>
            By: <span class=" text-gray-500 italic">{{$post->user->name}}</span>
            on: <span class=" text-gray-500 italic">{{ date('d-m-Y'),strtotime($post->updated_at)}}</span>

            <p class="text-l text-gray-700 py-6 leading-6">
            {{Str::limit($post->description,100)}}
            </p>
            <a class="bg-gray-700 text-gray-100 py-3 px-4 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}">Read more</a>

        </div>
    </div>
</div>


@endforeach

@endsection