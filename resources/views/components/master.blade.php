<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Solway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
</head>
<body class="font-anton">
<div id="app">
    <section class="px-8 py-2">
        <header class="container mx-auto flex justify-between items-center">
            <h1>
                <img src="/images/new-logo-1x.svg" alt="logo">
            </h1>
            <h2>
                <a href="https://www.instagram.com/antonday07/" class="font-fav text-lg hover:underline" target="_blank">@antonday</a>
            </h2>

        </header>

    </section>
    <hr class="p-4 mb-2">
    {{ $slot }}



</div>
<script src="https://unpkg.com/turbolinks"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script>
    @if(Session::has('message'))
        let type = "{{ Session::get('alert-type') }}";
        toastr.options = {
            "progressBar" : true,
            "positionClass" : "toast-bottom-right"
        }
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>
</body>
</html>
