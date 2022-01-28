<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breastForm extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'Q6', 
        'Q7', 
        'Q8', 
        'Q9', 
        'Q10'
    ];
}
