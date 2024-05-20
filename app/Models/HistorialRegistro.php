<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistorialRegistro extends Model
{
    use HasFactory;

    protected $table = 'HIS_HISTORIAL_REGISTRO';

    protected $primaryKey = 'HIS_ID';

    protected $fillable = [
        'HIS_CONSECUTIVO',
        'HIS_ID_PROCESO',
        'HIS_ID_TIPO',
    ];

    public function proceso(): BelongsTo
    {
        return $this->belongsTo(Proceso::class, 'HIS_ID_PROCESO', 'PRO_ID');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'HIS_ID_TIPO', 'TIP_ID');
    }
}
