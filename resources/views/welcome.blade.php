<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Banter</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative min-h-[80vh] pb-12 bg-gradient-to-r from-blue-500 to-emerald-500">

            <div class="container">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div class="mx-auto p-2 ">
                        <img src="{{asset('img/face.png')}}" class="opacity-75 h-24 w-24 lg:w-32 lg:h-32" alt="Banter Logo">
                    </div>
                </div>


                <div class="mt-8 bg-white shadow rounded-md sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="#000000" class="text-4xl" height="1em" width="1em" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M57.348,0.793H12.652C11.189,0.793,10,1.983,10,3.446v7.347h34.348c2.565,0,4.652,2.087,4.652,4.653v25.347h1.586 L60,50.207V3.446C60,1.983,58.811,0.793,57.348,0.793z"></path> <path d="M44.348,12.793H2.652C1.189,12.793,0,13.983,0,15.446v43.761l9.414-9.414h34.934c1.463,0,2.652-1.19,2.652-2.653V15.446 C47,13.983,45.811,12.793,44.348,12.793z M11,22.793h12c0.553,0,1,0.448,1,1s-0.447,1-1,1H11c-0.553,0-1-0.448-1-1 S10.447,22.793,11,22.793z M36,38.793H11c-0.553,0-1-0.448-1-1s0.447-1,1-1h25c0.553,0,1,0.448,1,1S36.553,38.793,36,38.793z M36,31.793H11c-0.553,0-1-0.448-1-1s0.447-1,1-1h25c0.553,0,1,0.448,1,1S36.553,31.793,36,31.793z"></path> </g> </g></svg>
                            {{--                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>--}}
                            <div class="text-4xl">
                                <a href="#" class="">Banter</a>
                            </div>
                        </div>

                        <div class="ml-1">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Welcome to our anonymous messaging platform! Here, you can freely express your thoughts and feelings without any fear of judgment or backlash. Our platform is designed to create meaningful and authentic conversations between individuals who seek to connect and have fun while maintaining their anonymity. Whether you want to share your deepest secrets or just have a lighthearted chat, our platform is the perfect place to do so. So, come join us and speak your mind with peace, knowing that your identity will always be kept a secret.
                                <div class="flex justify-center">
{{--                                    <button class="p-4 py-1 font-semibold text-sm bg-blue-600 rounded-full text-white">--}}
{{--                                        Get Started--}}
{{--                                    </button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative container py-16">
            <div class="mt-8 sm:p-8 bg-white overflow-hidden sm:shadow sm:rounded-lg">
                <form action="{{ route('bant.create') }}" method="post">
                    @csrf
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input name="title"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="What would you like to bant about today?" aria-label="Bant" />
                        <button
                            class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                            type="submit">
                            Create Bant
                        </button>
                    </div>
                </form>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">

                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-1 ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            &copy; Banter {{ date('Y') }}
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
