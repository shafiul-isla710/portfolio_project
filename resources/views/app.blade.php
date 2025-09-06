<html>

<head>
    <meta charset="utf-8" />
    <title>portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @vite(['resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @inertiaHead
</head>

<body>
    @inertia

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
