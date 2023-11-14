<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'contenu',
    ];
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
    
}
