@extends('layouts.panel.panel')
@section('content')
<div class="col text-end">
    <a href="{{ route('documents.create') }}" class="btn btn-outline-primary btn-sm">Crear Documento</a>
</div>
<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Documentos</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Codigo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proceso</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>

                </td>
                <td>
                  <p class="text-xs text-secondary mb-0"></p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0"></p>
                </td>
                <td>
                    <p class="text-xs text-secondary mb-0"></p>
                </td>
                <td class="align-middle text-center">
                 <a href="#" class="btn btn-sm btn-info">Ver</a>
                 <a href="#" class="btn btn-sm btn-success">Editar</a>
                 <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                 <a href="#" class="btn btn-sm btn-warning">Generar Archivo</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection