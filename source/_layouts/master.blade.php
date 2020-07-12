<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        {{-- Material Icon --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        {{-- flickity --}}
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> 
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="bg-gray-lightest">
        @yield('body')

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
