<?php

namespace App\Http\Controllers\Post\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);

        return redirect()->route('main.post.show', $post->id);
    }
}
