<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentBox extends Component
{
    public Comment $comment;

    public function render()
    {
        return view('livewire.comment-box');
    }
}
