<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';//tiene que hacer referencia a la llave primaria  
}
