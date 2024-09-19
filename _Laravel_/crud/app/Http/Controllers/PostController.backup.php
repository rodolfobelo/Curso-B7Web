<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $r){
        // $new_post = [
        //     'title' => 'Meu primeiro post',
        //     'content' => 'Conteudo qualquer',
        //     'author' => 'Rodolfo Freire Belo'
        // ];
        // Forma mais convencional para inserir um registro na base de dados
        // $post = new Post($new_post);
        // $post->save();

        // Segunda forma para inserir um registro na base de dados
        $post = new Post();
        $post->title = 'Meu terceiro post';
        $post->content = 'Terceiro conteudo qualquer';
        $post->author = 'Belo, Rodolfo Freire';
        $post->save();

        dd($post);
    }

    public function read(Request $r){
        $post = Post::find(4);
        
        return $post;
    }

    public function all(Request $r){
        $posts = Post::all();
        return $posts;
    }

    public function update(Request $r){
        $title = 'Meu quarto post alterado';
        $content = 'Conteudo qualquer';
        $author = 'Rodolfo Freire Belo';

        $post = Post::find(4)->update([
            'title' => $title,
            'content' => $content,
            'author' => $author
        ]);

        return $post;
    }

    public function delete(Request $r){
        $post = Post::find(3);
        
        if($post > 0){
            $post->delete();
            return 'Foram afetados ' . $post . 'registro(s)!';
        }else {
            return 'Nenhhum registro foi afetado!';
        }
    }
}