<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\Etudiant;



class TuteurController extends Controller
{
    public function liste2_tuteur()
    {
        $tuteurs = Tuteur::all();
        return view('tuteur.liste2', compact('tuteurs'));
    }
    
    public function ajouter2_tuteur()
    {
        $tuteurs = Tuteur::all();
        return view('tuteur.ajouter2', compact('tuteurs'));

    }
    
    public function ajouter2_tuteur_traitement(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
           

        ]);
        
        $tuteur = new Tuteur();
        $tuteur->nom = $request->nom;
        $tuteur->prenom = $request->prenom;
        $tuteur->save();
        
        return redirect('/ajouter2')->with('status', 'L\'tuteur a bien été ajouté avec succes.');
        
    }
    
    public function update_tuteur($id){
        $tuteurs = Tuteur::find($id);
        $etudiants = Etudiant::all();

        return view('tuteur.update', compact('tuteurs','etudiants'));
    }
    
    public function update_tuteur_traitement(Request $request){
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'etudiant'=> 'required',
           

        ]);
        $tuteur = Tuteur::find($request->id);
        $tuteur->nom = $request->nom;
        $tuteur->prenom = $request->prenom;
        $tuteur->etudiant = $request->etudiant;
        $tuteur->update();
        
        return redirect('/tuteur')->with('status', 'L\'tuteur a bien été modifier avec succes.');
    }
    
    public function delete_tuteur($id){
        $tuteur = Tuteur::find($id);
        $tuteur->delete();
        return redirect('/tuteur')->with('status', 'L\'tuteur a bien été suprime avec succes.');
    }
}
