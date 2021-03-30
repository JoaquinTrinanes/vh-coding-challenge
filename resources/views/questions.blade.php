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
<x-master>
    </div>

</html>
</x-master>
