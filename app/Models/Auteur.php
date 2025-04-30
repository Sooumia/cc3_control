<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;

    public $fillable = ['nom_auteur', 'prenom_auteur', 'datenaissance_auteur', 'pays_auteur'];

    public $timestamps = false;

    public function livres(){
        return $this->hasMany(Livre::class);
    }
 
}
