<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Title</title> @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<header class="flex justify-between p-6 items-center">
    <a href="#" class="flex items-center gap-2">
        <svg class="h-10 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd"
                  d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                  clip-rule="evenodd"/>
            <path
                d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z"/>
        </svg>
        <span class="text-xl font-black">HH-clone</span>
    </a>
    <div class="flex gap-2">
        <a href="#"
           class="bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 py-2 px-4 text-gray-900 font-semibold shadow-lg hover:shadow-xl focus:shadow-xl focus:outline-none">
            Sign In
        </a>
        <a href="#"
           class="bg-red-500 hover:bg-red-600 focus:bg-red-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl focus:outline-none">
            Sign Up
        </a>
    </div>
</header>

<main class="flex flex-col justify-center p-6 pb-12">
    <div class="mx-auto max-w-md">
        <svg class="h-12 mx-auto text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"/>
        </svg>
        <h2 class="text-3xl font-bold text-gray-900 mt-2">Password Recovery</h2>
    </div>
    <div class="bg-white mt-7 mx-auto shadow-xl p-10 w-full max-w-md">
        <div class="bg-gray-50 border border-gray-500 p-4">
            <h3 class="text-sm font-medium text-gray-800">Link sent.</h3>
        </div>

        <form method="post" action="{{ route('registerCreate') }}" class="space-y-6 mt-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-bold text-gray-700">E-mail</label>
                <div class="shadow-sm mt-1">
                    <input type="email" id="email" name="email"
                           class="border-gray-300 hover:border-gray-400 focus:border-red-500 focus:ring-red-500 text-sm w-full">
                </div>
            </div>
            <div>
                <a href="#"
                   class="flex justify-center items-center bg-gray-700 hover:bg-black focus:bg-black py-2 px-4 text-white font-semibold shadow-lg
                    hover:shadow-xl focus:shadow-xl focus:outline-none">
                    Recover
                </a>
            </div>
        </form>
    </div>
</main>
</body>
</html>
