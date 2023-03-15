<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
@stack('stylesheet')
<link rel="stylesheet" href=" http://meyerweb.com/eric/tools/css/reset/reset.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<title>
    {{ isset($title) ? config('app.name', 'Na Rota dos Povos') . ' | ' . $title : ''}}
</title>