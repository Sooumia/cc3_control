<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'ISBN_Livre',
        'titre_Livre',
        'prix_Livre',
        'description_Livre',
        'Auteur_id',
        'Categorie_id',
        'image_Livre',
    ]; 

    protected static function newFactory()
    {
        return \Database\Factories\LivreFactory::new();
    }
    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    /**
     * Get the author that owns the book.
     */
    public function author()
    {
        return $this->belongsTo(Auteur::class, );
    }
}