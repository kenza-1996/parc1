<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    public $table = "materiels";
    protected $fillable = ["num_serie","code_barre","lot_id","etat","affectation"];
    
    
    
    
    
    public function Lot(){ 
        return $this ->belongsTo(Lot::class);
    }
   
  
}
