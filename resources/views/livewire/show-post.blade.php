<div>
    <h1 class="text-2xl">{{ $post->title }}</h1>
    <div class="mt-4">{{ $post->content }}</div>

    <livewire:comments :$post />
</div>
