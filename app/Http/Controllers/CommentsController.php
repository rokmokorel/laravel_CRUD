<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create()
    {
        $post_id = $_GET['post_id'];
        return view('comments.create', ["post_id"=>$post_id]);
    }



    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comments'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'post_id' => 'required',
            'author' => 'required',
            'body' => 'required'
        ]);
        $comment = new Comment([
            'post_id' => $request->get('post_id'),
            'author' => $request->get('author'),
            'body' => $request->get('body')
        ]);

        $comment->save();
        return redirect('/posts/'. $request->post_id)->with('success', 'Komentar je shranjen!!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required',
            'author' => 'required',
        ]);
        $comment = Comment::findOrFail($id);
        $comment->body =  $request->get('body');
        $comment->author = $request->get('author');
        $comment->save();
        return redirect('/posts')->with('success', 'Komentar je popravljen!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect('/posts')->with('success', 'Komentar odstranjen!!!');
    }
}
