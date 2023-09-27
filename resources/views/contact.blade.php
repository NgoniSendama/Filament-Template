@extends('layouts.guest')

@section('content')

<!-- Hero -->
<section class="bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm py-16 text-center">
            <h2 class="my-4 text-4xl tracking-tight font-extrabold leading-tight text-white dark:text-white">Contact
            </h2>
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
                        <span class="ml-1 text-sm font-medium text-gray-50 md:ml-2 dark:text-gray-400">Contact</span>
                    </div>
                </li>
            </ol>

        </div>
    </div>
</section>



<!-- Main -->
<!-- Contact Us -->
<div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl lg:max-w-5xl mx-auto">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                Contact us
            </h1>
            <p class="mt-1 text-gray-600 dark:text-gray-400">
                We'd love to talk about how we can help you.
            </p>
        </div>

        <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                    Fill in the form
                </h2>

                <livewire:contact-form />
            </div>
            <!-- End Card -->

            <div class="divide-y px-4 divide-gray-200 dark:divide-gray-800">
                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">

                    <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>

                    <div>
                        <a href="tel:+263715038323">
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Contact</h3>
                            <p class="mt-1 text-sm text-gray-500">We're here to help with any questions or code.</p>
                            <p class="mt-1 text-sm text-gray-500">+263 715 038 323</p>

                        </a>

                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">

                    <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>


                    <div>
                        <a href="tel:+263715038323">
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Address</h3>
                            <p class="mt-1 text-sm text-gray-500"> Three Anchor House, 54 Jason Moyo Ave, Harare
                            </p>

                        </a>

                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class=" flex gap-x-7 py-6">
                    <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-200">Contact us by email</h3>
                        <p class="mt-1 text-sm text-gray-500">If you wish to write us an email instead please use
                        </p>
                        <a href="mailto:comworksco@gmail.com" class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200" href="#">
                            comworksco@gmail.com

                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
        </div>
    </div>
</div>


<!-- End Contact Us -->


<!-- ====== Call To Action Section Start -->
<section class="py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="bg-blue-950 relative z-10 overflow-hidden rounded py-12 px-8 md:p-[70px]">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <span class="mb-2 text-base font-semibold text-white">
                        Have A Business Idea In Your Mind?
                    </span>
                    <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[38px] lg:mb-0">
                        Get In touch With <br class="xs:block hidden" />
                        us
                    </h2>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-wrap lg:justify-end">
                        <a href="/contact" class="hover:text-blue dark:bg-white dark:text-blue-950 dark:font-extrabold dark:hover:bg-gray-200 my-1 mr-4 inline-block rounded bg-white bg-opacity-[15%] py-4 px-6 text-base font-medium text-white transition hover:bg-blue-500 md:px-9 lg:px-6 xl:px-9">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- ====== Call To Action Section End -->


@endsection