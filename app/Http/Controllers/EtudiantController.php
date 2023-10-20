<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Image;
use App\Models\Groupe;
use App\Models\Nationalite;
use App\Models\Ville;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        $tuteurs = Tuteur::all();
        // $imges = Image::all();
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupes = Groupe::all();
        return view('etudiant.ajouter', compact('tuteurs','villes','nationalites','groupes'));

        // return view('etudiant.ajouter',compact('tuteurs') );
    }
    
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'classe'=> 'required',
            'tuteur'=> 'required',
            'image'=> 'required',
            'ville'=> 'required',
            'nationalite'=> 'required',
            'groupe'=> 'required',
        ]);
        
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->images = $request->image;
        $etudiant->ville_id= $request->ville;
        $etudiant->nationalite_id= $request->nationalite;
        $etudiant->groupe_id= $request->groupe;
        $etudiant->tuteur_id= $request->tuteur;
        $etudiant->save();
        
        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succes.');
        
    }
    
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupes_saguin = Groupe::all();
        
        return view('etudiant.update', compact('etudiants', 'villes', 'nationalites', 'groupes_saguin'));
    }
    
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'classe'=> 'required',
            'tuteur'=> 'required',
            'image'=> 'required',
            'ville'=> 'required',
            'nationalite'=> 'required',
            'groupe'=> 'required',

        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->images = $request->image;
        $etudiant->ville_id= $request->ville;
        $etudiant->nationalite_id= $request->nationalite;
        $etudiant->groupe_id= $request->groupe;
        $etudiant->tuteur_id= $request->tuteur;
        $etudiant->update();
        
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifier avec succes.');
    }
    
    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été suprime avec succes.');
    }
}
