<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_ids',
        'payment_method',
        'payment_date', 
        'status',
        'delivery_address',
        'delivery_phone',
    ];
 
    // Ajoutez cette méthode si vous avez une relation many-to-many avec les livres
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Payment has many Livre
    public function livres()
    {
        return $this->belongsTo(Livre::class);
    } 
    
}
