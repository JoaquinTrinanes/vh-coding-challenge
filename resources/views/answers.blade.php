<x-master>
    <div>
        @forelse ($question->answers() as $answer)
            <div class="card shadow-sm">id: {{ $answer->id }} text: {{ $answer->answer }}</div>
        @empty
            <div>No answers :(</div>
        @endforelse
    </div>
</x-master>
