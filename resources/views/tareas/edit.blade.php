@extends('../layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tareas Page</div>
  <div class="card-body">
      
      <form action="{{ url('tareas/' .$tarea->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tarea->id}}" id="id" />
        <label>Enunciado</label></br>
        <input type="text" name="nombre" id="nombre" value="{{$tarea->nombre}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop