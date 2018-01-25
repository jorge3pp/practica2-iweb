@extends('layouts.app')

@section('content')
 
<div class="container">
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading"><h1>Agregar archivos en el repositorio: {{$valor->nombre}}</h1></div>
        <div class="panel-body">
          <form method="POST" action="http://localhost:8000/repositorios/{{$valor->id}}/subirarchivo" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <h3><label class="col-md-4 control-label">Nuevo Archivo</label></h3>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Subir archivo</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection