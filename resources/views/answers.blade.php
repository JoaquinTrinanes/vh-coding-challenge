<x-master title="{{ $question->question }}">
    <div>
        <h1>{{ $question->question }}</h1>
        <form method="POST" action="{{ route('questions.answers.store', ['question' => $question]) }}">
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
            <textarea class="form-control form-control-lg" id="answer" rows="3" placeholder="Answer the question&#8230;"
                name="answer">{{ old('answer') }}</textarea>
            <small id="help" class="form-text text-muted">Your submission will be anonymous.</small>

            <button class="btn btn-primary btn-lg" type="submit">Answer</button>
        </form>
    </div>
    <div>
        <ul class="list-group mt-5">
            @forelse ($question->answers as $answer)
                <li class="list-group-item align-middle card shadow-sm">
                    <p class="mb-0">{!! nl2br(e($answer->answer)) !!}</p>
                </li>
            @empty
                <div>There are no answers <div><small class="text-muted">Be the first to reply!</small></div>
                </div>
            @endforelse
        </ul>
    </div>
</x-master>
