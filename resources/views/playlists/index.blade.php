<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlists</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table style="border-collapse: collapse; width: 100%; border-spacing: 0;">
                        <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Title</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Creator</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Songs</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($playlists as $playlist)
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 2%;">{{ $playlist->title }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $playlist->creator }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">
                                    @foreach($playlist->Songs as $song)
                                        {{ $song->title }}<br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
