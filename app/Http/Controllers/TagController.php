<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;


class TagController extends Controller
{
    public function liste3_tag()
    {
        $tags = Tag::all();
        return view('tag.liste3', compact('tags'));
    }
    
    public function ajouter3_tag()
    {
        $tags = Tag::all();
        return view('tag.ajouter3', compact('tags'));
}
    
    
public function ajouter3_tag_traitement(Request $request)
{
    $request->validate([
        'nom'=> 'required',
        // 'prenom'=> 'required',
       
    ]);
    
    $tag = new Tag();
    $tag->nom = $request->nom;
    $tag->save();
 
    return redirect('/ajouter3')->with('status', 'L\'tag a bien été ajouté avec succes.');
}

public function update_tag($id){
    $tags = Tag::find($id);
    return view('tag.update3', compact('tags'));
}

public function update_tag_traitement(Request $request){
    $request->validate([
        'nom'=> 'required',
    ]);
    $tag = Tag::find($request->id);
    $tag->nom = $request->nom;
    $tag->update();
    
    return redirect('/tag')->with('status', 'L\'tag a bien été modifier avec succes.');
}

public function delete_tag($id){
    $tag = Tag::find($id);
    $tag->delete();
    return redirect('/tag')->with('status', 'L\'tag a bien été suprime avec succes.');
}
}
