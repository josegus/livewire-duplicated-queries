<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class Comments extends Component
{
    public Post $post;

    public function mount(): void
    {
        //sleep(5);
    }

    public function placeholder()
    {
        return <<<'BLADE'
            <div>
                <h2 class="mt-10 text-xl">Comments</h2>

                Loading..
            </div>
        BLADE;
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
