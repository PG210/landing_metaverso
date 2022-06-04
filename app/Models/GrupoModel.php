<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoModel extends Model
{
    protected $table = 'grupos';
    protected $primaryKey = 'id';//tiene que hacer referencia a la llave primaria  
}
