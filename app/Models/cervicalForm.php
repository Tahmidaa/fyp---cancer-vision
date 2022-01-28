<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cervicalForm extends Model
{
    
    use HasFactory;
    protected $fillable = [
        
        'Q16', 
        'Q17', 
        'Q18', 
        'Q19', 
        'Q20'
    ];
}
