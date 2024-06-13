<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('playlist.addsong')}}" method="POST">
                        @csrf
                    <button type="submit">Test</button>
                        @foreach($songs as $song)
                        <div class="p-6 bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg rve' gap-3 mt-4 has-[:checked]:bg-gray-600" style='transition: background-color cubic-bezier(0.075, 0.82, 0.165, 1) 0.5s'>
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $song->title }}</h2>
                                <p class="text-gray-500 dark:text-gray-300">{{ $song->artist }}</p>
                                <p class="text-gray-500 dark:text-green-400">
                                    {{ $song -> duration_string }}
                                </p>
                                <input type="checkbox" name="{{$loop->index}}" id="" style="display:none;" value="{{$song->id}}">
                                <p  class="text-gray-500 dark:text-red-400"><button type="button" onclick="event.target.closest('div').querySelector('input[type=checkbox]').checked = !event.target.closest('div').querySelector('input[type=checkbox]').checked">Select {{$song -> title}}</a></p>
                            </div>
                        </div>
                        @endforeach
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
