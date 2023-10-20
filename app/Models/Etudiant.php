<?php

namespace App\Models;

use App\Models\Image;
// use App\Models\Comment; 
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Groupe;
use App\Models\Nationalite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'images',
        'ville',
        'nationalite',
        'groupe',
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
      
        public function image()
        {
            return $this->hasOne(Image::class);
        }
        
       public function ville()
       {
           return $this->belongsTo(Ville::class);
       }
       
       public function groupe()
       {
           return $this->belongsTo(Groupe::class);
       }
       
       public function nationalite()
       {
           return $this->belongsTo(Nationalite::class);
       }
       
       public function tuteur()
       {
           return $this->belongsTo(Tuteur::class);
       }
       
       
  
}
