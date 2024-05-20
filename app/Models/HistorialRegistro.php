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
        'HIS_ID_DOCUMENTO'
    ];

    public function documento(): BelongsTo
    {
        return $this->belongsTo(Documento::class, 'HIS_ID_DOCUMENTO', 'DOC_ID');
    }
}
