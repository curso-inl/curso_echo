<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patrulla extends Model
{
    use HasFactory;
    protected $table='patrulla';
    protected $primaryKey='id_patrulla';

    protected $fillable = ['accion_patrulla','id_comisaria'];
}
