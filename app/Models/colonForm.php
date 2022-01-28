<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colonForm extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'Q21', 
        'Q22', 
        'Q23', 
        'Q24', 
        'Q25'
    ];
}
