<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>{{ $title ?? 'Q&A' }}</title>
</head>

<body>

    <div class="container">
        <h1>Q & A</h1>
        <hr />
        {{ $slot }}
    </div>
</body>

</html>
