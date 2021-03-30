<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>Questions</title>
</head>

<body>

    <div class="container">
        <h1>Q & A</h1>

        <div class="jumbotron">
            <h1 class="display-4">Ask a question</h1>

            <form action="">
                <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Todo set random question" required></textarea>

                <small id="help" class="form-text text-muted">Your question will be anonymous.</small>
                <button class="btn btn-primary" type="submit">Ask!</button>
            </form>
        </div>

        <div>
            @forelse ($questions as $question)
                <div>id: {{ $question->id }} text: {{ $question->question }}</div>
            @empty
                <div>No questions :(</div>
            @endforelse
        </div>
    </div>
</body>

</html>
