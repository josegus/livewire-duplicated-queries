<div>
    <h2 class="mt-10 text-xl">Comments</h2>

    <div class="mt-4 space-y-4">
        @foreach ($post->comments as $comment)
            <div wire:key="comment-{{ $comment->id }}">
                <livewire:comment-box :$comment />
            </div>
        @endforeach
    </div>
</div>
