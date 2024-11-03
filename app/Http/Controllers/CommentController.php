<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($animal_id)
    {
        //
        $comments = Comment::where('animal_id', $animal_id)->get();
    }


    public function store(Request $request, $animal_id)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',  // validation for comment input
        ]);

        $comment = new Comment();
        $comment->animal_id = $animal_id;
        $comment->user_id = Auth::user()->id;  // Get logged-in user's ID
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('animals.show', [$animal_id])->with('success', 'Comment added successfully');
    }

    public function hide($animal, $id)
    {
     $comment = Comment::find($id);

     if ($comment->hidden) {
         $comment->hidden = false;
     } else {
         $comment->hidden = true;
     }
     $comment->save();

        return redirect()->route('animals.show', [$animal])->with('success', 'Comment added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
