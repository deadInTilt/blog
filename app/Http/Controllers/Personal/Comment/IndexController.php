<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->getComments;
        return view('personal.comment.index', compact('comments'));
    }
}
