<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function liste4_post()
    {
        $posts = Post::all();
        $tags = Tag::all();
        // $tags = Tag::all();
        return view('post.liste4', compact('posts', 'tags'));
    }
    
    public function ajouter4_post()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('post.ajouter4', compact('posts','tags'));
}
    
public function ajouter4_post_traitement(Request $request)
{
    $request->validate([
        'nom'=> 'required',
        'contenu'=> 'required',
        
        // 'tag'=> 'required',
        // 'prenom'=> 'required',
       

    ]);
    
    $post = new Post();
    $post->nom = $request->nom;
    $post->contenu = $request->contenu;
    // $post->tag= $request->tag;
    $post->save();
    
    $tags = $request->tag_id;
    $post->tags()->attach($tags);
    
    return redirect('/ajouter4')->with('status', 'L\'Post a bien été ajouté avec succes.');
}

public function update_post($id){
    $posts = Post::find($id);
    $tags = Tag::all();
    return view('post.update4', compact('posts','tags'));
}

public function update_post_traitement(Request $request){
    $request->validate([
        'nom'=> 'required',
        'contenu'=> 'required',
        // 'tag'=> 'required',
    ]);
    $post = Post::find($request->id);
    $post->nom = $request->nom;
    $post->contenu = $request->contenu;
    // $post->tag= $request->tag;
    $post->update();
    
    return redirect('/post')->with('status', 'L\'Post a bien été modifier avec succes.');
}

public function delete_post($id){
    $post = Post::find($id);
    $post->delete();
    return redirect('/post')->with('status', 'L\'Post a bien été suprime avec succes.');
}
}
