<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['usuario', 'contrasenna','rol'];
    protected $table= "usuario";
    use HasFactory;
}
