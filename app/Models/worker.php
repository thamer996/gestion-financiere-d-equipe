<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $table='workers';
    protected $fillable = [
        'fullname',
        'salary',
        'job',
        'debut_of_contrat',
        'end_of_contrat',
        'phone_number'
    ];
}
