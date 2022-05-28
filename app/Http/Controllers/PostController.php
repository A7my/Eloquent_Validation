<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index" , compact('posts'));

// Restore All Archieved Data
        // Post::withTrashed()->restore();

// Restore Specific Archieved Data
        // Post::withTrashed()->where('id',4)->restore();

// Get All Archieved Data

        // $posts = Post::withTrashed()->get();
        // return $posts;

// Get Specific Archieved Data
        // $post = Post::withTrashed()->where('id',4)->get();
        // return $post;

    }

    public function create()
    {
        return view('addpost');
    }

    public function store(StorePostRequest $request)
    {

// Validation

        // $request->validate([

        // ]);



        $posts        =  new Post();
        $posts->title =  $request->title;
        $posts->body  =  $request->body;
        $posts->save();

        // Post::create([
        //     'title' => $request->title,
        //     'body'  => $request->body
        // ]);
        return redirect()->back()->with('msg' , "You Added A New subject To Your Blog");
    }


    public function show(Post $post)
    {

    }


    public function edit(Post $post)
    {

// Get The Post That you'll Change
        $post = Post::find($post->id);
        return view("posts.update" , compact('post'));
    }


    public function update(Request $request, Post $post)
    {
// Update By Eloquent
        // $newpost = Post::findorfail($post->id);
        // $newpost->title = $request->title;
        // $newpost->body = $request->body;
        // $newpost->save();

// Update By Query Builder

        // DB::table('posts')->where('id' , $post->id)->update([
        //     'title' => $request->title,
        //     'body' => $request->body
        // ]);


        // return redirect()->route('posts.index')->with('mymsg' , "You've Updated Your Data");
    }


    public function destroy(Post $post)
    {
// Permentantly Delete
        // $post = Post::findorfail($post->id);
        // $post->forceDelete();
        // return redirect()->route('posts.index')->with('delmsg' , 'you deleted a post');

// Soft Delete
        // Post::destroy($post->id);
        // return redirect()->route('posts.index')->with('delmsg' , 'you deleted a post');


    }

}
