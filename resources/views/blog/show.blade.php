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
    <h1 class="text-5xl font-bold">{{$post->title}}</h1>
    <div class="mt-2">
     By: <span class=" text-gray-500 italic">{{$post->user->name}}</span>
     on: <span class=" text-gray-500 italic">{{ date('d-m-Y'),strtotime($post->updated_at)}}</span>
</div>
</div>
<div class="container m-auto pt-10 pb-5 ">
<div class="flex h-90 p-10">
        <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
    </div>

            <p class="text-l text-gray-700 py-3 px-6 leading-6">
            {{$post->description}}
            </p>
@if(Auth::user()&& Auth::user()->id == $post->user_id)
            <a class="bg-green-700 text-green-100 py-3 px-8 mt-6 rounded-lg font-bold uppercase text-l place-self-start inline-block" href="/blog/{{$post->slug}}/edit">Edit post</a>
            <form action="/blog/{{$post->slug}}" method="POST" class="inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-700 text-red-100 py-3 px-6 mt-6 rounded-lg font-bold uppercase text-l place-self-start inline-block">Delete post</button>
            </form>
@endif
</div>


@endsection