<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\StoreRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(Comment $comment, StoreRequest $request)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
