<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['Libelle', 'Marque', 'Prix', 'Stock'];
}
