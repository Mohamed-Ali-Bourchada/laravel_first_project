<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matiere extends Model
{
    use HasFactory;

    protected $table = 'matiers'; // Correct table name

    protected $primaryKey = 'code'; // Set the primary key to 'code'

    public $incrementing = false; // Set to false if 'code' is not an auto-incrementing integer


    protected $fillable = [
        'id',
        'code',
        'libelle',
        'coef',
    ];

    // Define the relationship to Epreuve
    public function epreuves(): HasMany
    {
        return $this->hasMany(Epreuve::class, 'matiere_id', 'id'); // Use 'code' as the reference
    }
}
