<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function publicHomePage(){
         $posts=Post::paginate(7);
         return view('blog/home',['posts'=>$posts]);
     }
    public function index()
    {
        $id=Auth::id();
        $posts=Post::all()->where('user_id',$id);
        return view('adminPanle/home',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanle/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // echo $request->title;
      // echo $request->body;
    //   dd($request->input('title'));

    $user_id = Auth::id();

    //   Post::create([
    //       'title' => $request->input('title')
    //   ]);

    $post = new Post();

    $post->title = $request->title;
    $post->body = $request->body;
    $post->user_id = $user_id;
    $post->save();




      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::find($id);
       $data=array(
        'id'=>$id,
         'post'=>$post

       );
       return view('blog/view_post',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('adminPanle/edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(isset($request->title)){
            $post->title=$request->title;
        }

    if(isset($request->body)){
            $post->body=$request->body;
        }
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post = Post::find($id);
      
        $post->delete();
        
      return redirect()->route('posts.index');
    }
}
