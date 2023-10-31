@extends('layouts.app')
@section('content')
<div class="relative overflow-hidden bg-cover bg-no-repeat" style="
        background-position: 50%;
        background-image: url('https://tecdn.b-cdn.net/img/new/slides/146.webp');
        height: 370px;">
      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
        <div class="flex h-full items-center justify-center">
          <div class="px-6 text-center text-white md:px-12">
            <h1 class="mb-6 text-5xl font-bold">Welcome to Blogs</h1>
            <h3 class="mb-8 text-3xl font-bold"></h3>
            <a type="button" href="{{url('/blog')}}" class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init="" data-te-ripple-color="light" >
              Start Reading
            </a>
          </div>
        </div>
      </div>
    </div>
    @foreach($posts as $post)
<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-20">
  
    <div class="flex mx-2 md-4">
        <img class="object-cover sm:rounded-lg " src="/images/{{$post->image_path}}" alt="">
</div>

<div class="flex flex-col item-left justifycenter m-10 sm:m-0">
    <h2 class="font-bold text-gray-700 text-3xl uppercase">{{$post->title}}</h2>
    <p class="font-bold text-gray-600 text-xl pt-2">
      {{Str::limit($post->description,400)}}
   </p>
   <p class="py-5 text-gray-500 text-sm leading-5">
</p>
   <p>
    <a class="bg-gray-700 text-gray-100 py-3 px-4 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}">Read more</a>

</p>
</div>
</div>
@endforeach
<!-- Blog -->
<div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-3">UX Design Thinking</div>
        <div class="font-bold text-2xl py-3">Programming Languages</div>
        <div class="font-bold text-2xl py-3">Graphic Design</div>
        <div class="font-bold text-2xl py-3">Front-end Developement</div>
    </div>
</div>

<!-- Posts -->

<div class="container mx-auto text-center py-20">
    <h2 class="font-bold text-5xl py-10">Resent Posts</h2>
    <p class="text-gray-500 leading-6 px-10">
    Programming languages are the tools we use to write instructions for computers to follow. Computers “think” in binary — strings of 1s and 0s. Programming languages allow us to translate the 1s and 0s into something that humans can understand and write. A programming language is made up of a series of symbols that serves as a bridge that allow humans to translate our thoughts into instructions computers can understand.</p>

</div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-blue-900 text-gray-100 pt-10 ">
            <div class="block m-auto pt-4 pd-20 w-4/5">
              What's a Blog & Why You Need One
                <h3 class="text-l py-10 leading-6">Even if you‘re not sure what a blog is, you’ve no doubt come across one at some point in time. Perhaps you‘ve stumbled across a blog when you’ve searched “healthy dinner recipes”. In fact, if you're reading this, guess what? You're on a blog. (Very meta, I know.)
                   </h3>
                  <p> If your business doesn't have a blog, you might want to reconsider — B2B marketers who use blogs receive 67% more leads than those who do not, and blogs have been rated the 5th most trusted source for accurate online information.
At its most basic, blogs can help you develop an online presence, prove yourself an expert in an industry, and attract more quality leads to all pages of your site..</p>
                   <h3 class="text-l py-3 leading-6">Blog definition: In simple terms, a blog is a regularly updated website or web page, and can either be used for personal use or to fulfill a business need.</h3>
                {{-- <a class="bg-transparent border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block" href="">Read More</a> --}}
        
        
        <div class="flex">
        <img src="/images/blogpostimage.jpg" alt="">
      </div>
    </div>
   </div>
    </div>
@endsection
