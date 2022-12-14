<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_categoria',
        'categoria',
        'tipo_id'
        ];
    
       /* public function students() {
            return $this->hasMany(students::class);
    
        }*/
        public function students() {
            return $this->belongsTo(tipo::class,'tipo_id');
        
            }
    use SoftDeletes; 
    
}
