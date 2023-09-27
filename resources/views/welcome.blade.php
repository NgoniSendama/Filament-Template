@extends('layouts.guest')

@section('content')
    <section class="bg-gray-900">
        <div class="container mx-auto flex px-5 pt-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font text-3xl lg:text-5xl mb-6 font-bold text-white">
                    Comprehensive agency enabling effective promotion for businesses.
                </h1>
                <p class="mb-8 leading-relaxed text-gray-300 text-2xl">
                    Our expertise lies in creating and implementing innovative and captivating strategic advertising
                    campaigns.

                </p>
                <div class="flex justify-center gap-4 mb-3">
                    <a href="/contact"
                        class="inline-flex text-white bg-indigo-900 border-0 py-4 px-8 focus:outline-none hover:bg-indigo-800 rounded text-lg">
                        Enquire Now
                    </a>
                    <a href="/contact"
                        class="inline-flex bg-white  border-0 py-4 px-8 focus:outline-none hover:bg-gray-100 rounded text-lg">
                        Call
                    </a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <!-- <img class="object-cover object-center rounded" alt="hero" src="https://pnawebtech.com/wp-content/uploads/2023/04/R.png" /> -->
                <img src="{{ asset('images/Background.png') }}" class="object-cover object-center rounded" alt="">
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="About">
        <section class="text-gray-600 dark:bg-slate-900 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero"
                        src="{{ asset('images/why choose us.jpg') }}" />
                </div>
                <div
                    class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-xl text-2xl mb-4 font-medium text-blue-500 ">
                        Why Choose Us?
                    </h1>
                    <h1 class="title-font sm:text-xl lg:text-3xl mb-4 font-medium dark:text-white text-[#191970;]">
                        We ensure customer satisfaction through exceptional service
                        delivery.
                    </h1>
                    <p class="mb-8 leading-relaxed dark:text-gray-300">
                        When it comes to communicating your brand’s messages generic marketing won’t surface. Our team lives
                        and breathes your brand, gaining a deep understanding of your goals to develop a strategy focused on
                        tangible results. Allow us to enlink you with your target market through cutting-edge campaigns that
                        leave unique lasting impressions.
                    </p>
                    <div class="flex justify-center">
                        <a href="/about"
                            class="inline-flex text-white border-0 py-3 px-6 focus:outline-none rounded text-lg"
                            style="background-color: #08113B;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- End CLients -->

    <!-- Blog -->
    <section class="text-gray-600 dark:bg-slate-900 body-font">
        <div class="container px-5  mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-1/2 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0 dark:text-white">
                        Latest Blogs & News
                    </h1>
                    <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0 dark:text-gray-500">
                        As an advertising and marketing company, we strive to keep our audience well-informed with the
                        latest industry insights. Our "Latest Blogs & News" section serves as a valuable resource, offering
                        a collection of up-to-date articles and news pieces.
                    </p>
                </div>
            </div>
        </div>

        <div class="container px-5 py-24 mx-auto">

            <div class="flex flex-wrap -m-4">
                @foreach ($blog as $item)
                    <div class="p-4 md:w-1/3">
                        <div
                            class="h-full border-2 border-gray-200 dark:border-gray-800 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ asset('storage/' . $item->image) }}" alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3 dark:text-white">
                                    {{ $item->heading }}</h1>
                                <p class="leading-relaxed mb-3"> {{ $item->keywords }}</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('blog.show', ['slug' => $item->slug]) }}"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">Looking
                    to start a conversation with your customers? </h2>

                <a href="/contact"
                    class="text-white  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-20  focus:outline-none"
                    style="background-color: #08113B;">Let’s talk.</a>
            </div>
        </div>
    </section>
@endsection
