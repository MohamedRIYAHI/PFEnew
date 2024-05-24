<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centre de Formation Continue</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif">
<header class=" font-serif relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
    <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem]">
        @include('layouts.navigation')

    </div>
</header>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                        <div class="w-full px-5 py-4 mb-5 bg-green-100 border-l-4 border-green-500">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-3">
                            <a href="{{ route('messages.create') }}"
                               class="block w-full p-2 text-center text-white bg-indigo-400 hover:bg-indigo-600">New
                                Message</a>
                        </div>
                        <div class="col-span-9">
                            <table class="min-w-full leading-normal">
                                <thead class="border-b bg-gray-50">
                                <th
                                    class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                    Sender</th>
                                <th
                                    class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                    Subject</th>
                                <th
                                    class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                </th>
                                </thead>
                                <tbody>
                                @each('messenger.partials.thread', $threads, 'thread',
                                'messenger.partials.no-threads')
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

