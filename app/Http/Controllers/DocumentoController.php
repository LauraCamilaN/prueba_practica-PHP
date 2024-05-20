<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\HistorialRegistro;
use App\Models\Proceso;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        return view('modules.documents.index');
    }

    public function create()
    {
        $procesos = Proceso::all();
        $documentos = TipoDocumento::all();

        return view('modules.documents.create', compact('procesos', 'documentos'));
    }

    public function store(Request $request)
    {
        $data = new Documento;
        $data->DOC_NOMBRE = $request->input('nombre');
        $data->DOC_CODIGO = $request->input('codigo');
        $data->DOC_CONTENIDO = $request->input('contenido');
        $data->DOC_ID_TIPO = $request->input('tipo_documento');
        $data->DOC_ID_PROCESO = $request->input('proceso');
        $data->save();

        $record = new HistorialRegistro;
        $record->HIS_CONSECUTIVO = $request->input('consecutivo');
        $record->HIS_ID_DOCUMENTO = $data->DOC_ID;
        $record->save();

        return response()->json([
            'message' => 'El documento ha sido registrado exitosamente.',
            'status' => 200
        ]);
    }

    public function calculate_code(int $id_proceso, int $id_tipo)
    {
        $proceso = Proceso::findOrFail($id_proceso);
        $documento = TipoDocumento::findOrFail($id_tipo);

        $historial = HistorialRegistro::
        join('DOC_DOCUMENTO', 'DOC_DOCUMENTO.DOC_ID', '=', 'HIS_HISTORIAL_REGISTRO.HIS_ID_DOCUMENTO')
        ->join('PRO_PROCESO', 'PRO_PROCESO.PRO_ID', '=', 'DOC_DOCUMENTO.DOC_ID_PROCESO')
        ->join('TIP_TIPO_DOC', 'TIP_TIPO_DOC.TIP_ID', '=', 'DOC_DOCUMENTO.DOC_ID_TIPO')
        ->where('PRO_PROCESO.PRO_ID', $id_proceso)
        ->where('TIP_TIPO_DOC.TIP_ID', $id_tipo)
        ->select('HIS_HISTORIAL_REGISTRO.HIS_CONSECUTIVO', 'PRO_PROCESO.PRO_ID as pro_id', 'TIP_TIPO_DOC.TIP_ID as tip_id, HIS_HISTORIAL_REGISTRO.HIS_ID as his_id')
        ->first();

        if (isset($historial) && $proceso->PRO_ID == $historial->pro_id && $documento->TIP_ID == $historial->tip_id){

            $consecutive = HistorialRegistro::findOrFail($historial->his_id);

            $consecutive_new = $consecutive->HIS_CONSECUTIVO + 1;

        } else {
            $consecutive_new = 1;
        }

        $code =  $documento->TIP_PREFIJO . '-' . $proceso->PRO_PREFIJO . '-' . $consecutive_new;

        return response()->json([
            'code' => $code,
            'consecutive_new' => $consecutive_new,
            'status' => 200,
            'message' => 'El código ha sido calculado exitosamente'
        ]);
        
    }

    public function edit(int $id)
    {

    }

    public function update(Request $request, int $id)
    {

    }

    public function delete($id)
    {

    }
}
