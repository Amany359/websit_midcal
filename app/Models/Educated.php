<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educated extends Model
{
    use HasFactory;
     // Specify the table name if it's not the plural of the model name
     protected $table = 'educated';

     // Define the fillable fields
     protected $fillable = ['name','description'];
}
