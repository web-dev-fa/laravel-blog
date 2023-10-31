@extends('layouts.app')
@section('content')
<div class="container m-auto text-center pt-10 pb-5 ">
    <h1 class="text-5xl font-bold">Add a new post</h1>

<div class="container m-auto pt-10 pb-5 ">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title"
        class="full h-20 text-5xl rounded-lg shadow-lg border-b p-10 mb-20">

        <textarea name="description" placeholder="Description"
        class="w-full h-60 text-4xl rounded-lg shadow-lg border-b py-10 mt-5"></textarea>

<div class="py-20">
    <label class="bg-gray-500 hover:bg-gray-200 text-gray-700 hover:bg-gray-500 transition-duration-300 cursor-pointer py-4 px-5 rounded-lg font-bold uppercase">
        <span>Select an image to upload</span>
        <input type="file" name="image" class="hidden">
    </label>

</div>
        <button class="bg-gray-700 hover:bg-gray-500 text-white hover:text-gray-200 transition-duration-300 py-3 px-5 rounded-lg font-bold uppercase" type="submit">Submit the post</button>
    </form>
</div>

@endsection