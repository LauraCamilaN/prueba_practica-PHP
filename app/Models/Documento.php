<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'DOC_DOCUMENTO';

    protected $primaryKey = 'DOC_ID';

    protected $fillable = [
        'DOC_NOMBRE',
        'DOC_CODIGO',
        'DOC_CONTENIDO',
        'DOC_ID_TIPO',
        'DOC_ID_PROCESO',
    ];

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'DOC_ID_TIPO', 'TIP_ID');
    }

    public function proceso(): BelongsTo
    {
        return $this->belongsTo(Proceso::class, 'DOC_ID_PROCESO', 'PRO_ID');
    }
}