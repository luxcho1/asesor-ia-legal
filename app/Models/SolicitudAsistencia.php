<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAsistencia extends Model
{
    use HasFactory;
    protected $table = 'solicitudes_asistencia'; // Asegúrate de especificar el nombre correcto

    protected $fillable = [
        'abogado_id',
        'nombre',
        'telefono',
        'correo',
        'descripcion',
    ];

    // Relación con el modelo Abogado (opcional)
    public function abogado()
    {
        return $this->belongsTo(Abogado::class);
    }
}
