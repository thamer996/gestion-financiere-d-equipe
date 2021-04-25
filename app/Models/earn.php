<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class earn extends Model
{
    protected $table='earns';
    protected $fillable = [
        'source' ,
        'price' ,
        'reason' 
        
       
    ];
}
