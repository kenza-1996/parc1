<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeDps extends Model
{
    use HasFactory;
    public $table = "dpsdemandes";
    protected $fillable = ['num_dps', 'date','materiel_id', 'structure_id' ];
    protected $casts = [
        'action' => 'boolean',
    ];

    public function materiel(){ 
        return $this ->belongsTo(Materiel::class);
    }
    public function structure(){ 
        return $this ->belongsTo(Structure::class);
    }
  

}
