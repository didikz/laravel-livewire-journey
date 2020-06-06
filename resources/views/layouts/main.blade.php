<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @livewireStyles
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
</head>
<body>
<div class="max-h-full bg-gray-100" x-data="mainData()">

    @include('layouts.navbar')

    <header class="bg-white shadow">
        @yield('contentHeader')
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</div>

@if(session()->has('success'))
    <div x-data="{ toastOpen: true }">
        <div class="rounded-md bg-green-100 p-4 fixed bottom-0 right-0 m-8 max-w-2xl mx-auto md:w-full max-w-sm" x-show="toastOpen">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-green-800">
                        {{ session()->get('success') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button @click="toastOpen = false" class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@livewireScripts

@stack('scripts')

<script>
    function mainData() {
        return {
            profileDropdown: false,
            deleteModalOpen: false,
            mobileNavOpen: false,
            openDeleteModal(modalUrl) {
                this.deleteModalOpen = true;
                // const formDelete = document.querySelector('#form-delete-modal');
                // formDelete.setAttribute('action', modalUrl);
            }
        };
    }
</script>
</body>
</html>
