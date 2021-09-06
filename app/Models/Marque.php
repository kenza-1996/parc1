<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    public $table = "marques";
    protected $fillable = ["nom"];
   


    public function categories(){
        return $this->hasMany(Categorie::class);
    }
    
}
