@extends('layouts.panel.panel')
@section('content')

    <div class="col">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Edición del documento: {{ $documento->DOC_NOMBRE }}</h6>
                </div>
              </div>
            <div class="card-body">
                <form class="form" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="">Nombre de archivo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $documento->DOC_NOMBRE }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="ms-0">Tipo de documento <span class="text-danger">*</span></label>
                                <select name="tipo_documento" id="tipo_documento" class="form-control">
                                    
                                    <option value="" disabled>Seleccione una opción...</option>
                                    @foreach ($documentos as $item)
                                        <option value="{{ $item->TIP_ID }}">{{ $item->TIP_NOMBRE }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="ms-0">Proceso <span class="text-danger">*</span></label>
                                <select name="proceso" id="proceso" class="form-control">
                                    <option value="" disabled>Selecciona una opción...</option>
                                    @foreach ($procesos as $proceso)
                                        <option value="{{ $proceso->PRO_ID }}">{{ $proceso->PRO_NOMBRE }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="">Código de documento <span class="text-danger">*</span></label>
                                <input type="text" id="codigo" name="codigo" disabled class="form-control" value="{{ $documento->DOC_CODIGO }}">
                                <input type="hidden" hidden name="consecutivo" id="consecutivo" value="{{ $consecutivo }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-static mb-4">
                                <label for="">Contenido de archivo <span class="text-danger">*</span></label>
                                <input type="text" name="contenido" id="contenido" class="form-control" value="{{ $documento->DOC_CONTENIDO }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" id="btnEdit" class="btn btn-primary">ACTUALIZAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('modules.documents.scripts.edit')
@endsection