<div class="p-2 rounded border border-gray-200">
    <div class="flex items-center justify-between text-gray-400">
        <div>{{ $comment->user->username }}:</div>
        <div>#{{ $comment->id }}</div>
    </div>

    <div>{{ $comment->content }}</div>

    @if ($comment->comments->isNotEmpty())
        <div class="ml-4 mt-2 space-y-2">
            @foreach ($comment->comments as $child)
                <div wire:key="child-comment-{{ $comment->id }}">
                    <livewire:comment-box :comment="$child" />
                </div>
            @endforeach
        </div>
    @endif
</div>
