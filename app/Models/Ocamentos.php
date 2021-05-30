<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocamentos extends Model
{
    use HasFactory;
    protected $table = 'ocamentos';
    protected $fillable = ['name', 'email', 'telemovel', 'morada', 'codpost', 'mensagem'];

}

