<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&family=Roboto:wght@100&display=swap" rel="stylesheet">

<!-- Styles -->
@stack('stylesheet')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<title>
    {{ isset($title) ? config('app.name', 'Na Rota dos Povos') . ' | ' . $title : ''}}
</title>

<!-- scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@livewireStyles