<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lungForm extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'Q11', 
        'Q12', 
        'Q13', 
        'Q14', 
        'Q15'
    ];
}
