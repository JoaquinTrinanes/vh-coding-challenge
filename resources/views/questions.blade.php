<x-master>
    <div class="jumbotron shadow">
        <h1 class="display-4">Ask a question</h1>

        <form method="POST" action="{{ route('questions.store') }}">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" name="question" id="question" class="form-control form-control-lg"
                placeholder="{{ Arr::random(Config::get('constants.question_placeholders')) }}"
                value="{{ old('question') }}" />
            <small id="help" class="form-text text-muted">Your submission will be anonymous.</small>

            <button class="btn btn-primary btn-lg" type="submit">Ask!</button>
        </form>
    </div>

    <div>
        @forelse ($questions as $question)
            <a class="text-decoration-none no-anchor-color" href="{{ route('questions.answers.index', $question->id) }}">
                <div class="card shadow mb-4 question-card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 title="{{ $question->question }}" class="ellipsis">{{ $question->question }}</h3>
                        </div>
                        {{ $question->number_of_answers }} answer/s
                    </div>
                </div>
            </a>

        @empty
            <div>No questions :(</div>
        @endforelse
    </div>
</x-master>
