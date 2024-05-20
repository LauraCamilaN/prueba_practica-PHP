<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'TIP_TIPO_DOC';

    protected $primaryKey = 'TIP_ID';

    protected $fillable = [
        'TIP_NOMBRE',
        'TIP_PREFIJO'
    ];

    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class, 'DOC_ID_TIPO', 'TIP_ID');
    }

}
