<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosModel extends Model
{
    protected $table = 'formulario';
    protected $primaryKey = 'id';//tiene que hacer referencia a la llave primaria  
}
