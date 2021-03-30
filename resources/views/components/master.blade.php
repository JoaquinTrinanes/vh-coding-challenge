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
    @if (session('message'))
        <div class="alert alert-{{ session('role') ?? 'success' }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container mt-5">
        <a href="/" class="no-anchor-color text-decoration-none rounded-lg header d-inline-block p-3">
            <h1>Q & A</h1>
        </a>

        <hr />
        {{ $slot }}
    </div>
</body>

</html>
