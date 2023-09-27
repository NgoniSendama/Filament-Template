@extends('layouts.guest')

@section('content')
<!-- Hero -->
<section class="bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="mx-auto max-w-screen-sm py-16 text-center">
      <h2 class="my-4 text-4xl tracking-tight font-extrabold leading-tight text-white dark:text-white">
        Blog</h2>
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a href="#" class="inline-flex items-center text-sm font-medium text-gray-50 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Home
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <a href="#" class="ml-1 text-sm font-medium text-gray-50 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pages</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-50 md:ml-2 dark:text-gray-400">Blog</span>
          </div>
        </li>
      </ol>

    </div>
  </div>
</section>
{!! seo() !!}
<!-- Blog -->
<!-- Card Blog -->
<div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <h1 class="text-blue-500 dark:text-gray-300 text-center font-extrabold">LATEST BLOG</h1>
  <h1 class="text-3xl text-gray-900 text-center mt-8 mb-16 font-bold">Read The Latest Articles from Our Blog Post</h1>
  <!-- Grid -->
  <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
    <!-- Card -->
    @foreach ($blog as $item)
    <a class="group rounded-xl overflow-hidden" href="{{ route('blog.show', ['slug' => $item->slug]) }}">
      <div class="sm:flex">
        <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl" src="{{ asset('storage/' . $item->image) }}" alt="Image Description">
        </div>

        <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
          <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
            {{$item-> heading}}

          </h3>
          <p class="mt-3 text-gray-600 dark:text-gray-400">
            {{$item-> keywords}}
          </p>
          <p class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
            Read more
            <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
          </p>
        </div>
      </div>
    </a>
    <!-- End Card -->
    @endforeach

  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
@endsection