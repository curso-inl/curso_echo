<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comisaria extends Model
{
    use HasFactory;
    protected $table='comisaria';
    protected $primaryKey='id_comisaria';

    protected $fillable = ['descripcion'];

    function rel_patrulla() {
        return $this->hasMany(patrulla::class,'id_comisaria','id_comisaria');
    }


    // public function getRouteKeyName()
    // {
    //     return 'id_comisaria';
    // }
}
