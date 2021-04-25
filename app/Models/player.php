<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    protected $table='players';
    protected $fillable = [
        'firstname' ,
        'lastname' ,
        'date_of_birth' ,
        'position' ,
        'phone_number' ,
        'image' ,
        'debut_of_contrat',
        'end_of_contrat' ,
        'salary' 
       
    ];
}
