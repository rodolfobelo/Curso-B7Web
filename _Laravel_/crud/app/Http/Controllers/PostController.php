<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $post->title = 'Meu terceiro post';
        $post->content = 'Terceiro conteudo qualquer';
        $post->author = 'Belo, Rodolfo Freire';
        $post->save();

        dd($post);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);        
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Meu quarto post alterado';
        $content = 'Conteudo qualquer';
        $author = 'Rodolfo Freire Belo';

        $post = Post::find($id)->update([
            'title' => $title,
            'content' => $content,
            'author' => $author
        ]);

        return $post;
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
        $post = Post::find($id)->delete();
        return $post;
        // if($post > 0){
        //     $post->delete();
        //     return 'Foram afetados ' . $post . 'registro(s)!';
        // }else {
        //     return 'Nenhhum registro foi afetado!';
        // }
    }
}
