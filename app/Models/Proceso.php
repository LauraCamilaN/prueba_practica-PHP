<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proceso extends Model
{
    use HasFactory;

    protected $table = 'PRO_PROCESO';

    protected $primaryKey = 'PRO_ID';

    protected $fillable = [
        'PRO_PREFIJO',
        'PRO_NOMBRE'
    ];

    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class, 'DOC_ID_PROCESO', 'PRO_ID');
    }
}
