@extends('layouts.panel.panel')
@section('content')
<div class="col">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Información del documento {{ $document->DOC_NOMBRE }}</h6>
            </div>
          </div>
        <div class="card-body">
            <form class="form" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="">Nombre de archivo</label>
                            <input type="text" class="form-control" value="{{ $document->DOC_NOMBRE }}" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="" class="ms-0">Tipo de documento</label>
                            <input type="text" class="form-control" value="{{ $document->tipo->TIP_NOMBRE }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="" class="ms-0">Proceso</label>
                            <input type="text" class="form-control" value="{{ $document->proceso->PRO_NOMBRE }}" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="">Código de documento</label>
                            <input type="text" disabled class="form-control" value="{{ $document->DOC_CODIGO }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-static mb-4">
                            <label for="">Contenido de archivo</label>
                            <input type="text" class="form-control" value="{{ $document->DOC_CONTENIDO }}" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection