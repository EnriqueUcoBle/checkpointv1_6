<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'administradores';
    protected $primary_key = 'usuario_id';
}
