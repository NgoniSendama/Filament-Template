<div>
    @if(session()->has('success'))

    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            <!-- Meesage -->
            {{ session('success') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif
    <form wire:submit.prevent="submitForm">
        <div class="grid gap-4">
            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
                    <input type="text" id="first_name" wire:model="first_name" class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="First Name">
                    @error('first_name') <span class="text-red-700">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
                    <input type="text" id="last_name" wire:model="last_name" class="py-3 px-4 border block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Last Name">
                    @error('last_name') <span class="text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>
            <!-- End Grid -->

            <div>
                <label for="hs-email-contacts-1" class="sr-only">Email</label>
                <input type="email" autocomplete="email" id="email" wire:model="email" class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Email">
                @error('email') <span class="text-red-700">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="hs-phone-number-1" class="sr-only">Phone Number</label>
                <input type="text" id="phone" wire:model="phone" class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Phone Number">
                @error('phone') <span class="text-red-700">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="hs-about-contacts-1" class="sr-only">Message</label>
                <textarea rows="4" id="message" wire:model="message" class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Message"></textarea>
                @error('message') <span class="text-red-700">{{ $message }}</span> @enderror
            </div>
        </div>
        <!-- End Grid -->

        <div class="mt-4 grid">
            <button type="submit" wire:loading.attr="disabled" class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-950 hover:bg-blue-950 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                Send Enquiry
            </button>

        </div>

        <div class="mt-3 text-center">
            <p class="text-sm text-gray-500">
                We'll get back to you in 1-2 business days.
            </p>
        </div>
    </form>


</div>