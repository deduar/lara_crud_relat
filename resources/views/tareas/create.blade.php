@extends('../layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tareas Page</div>
  <div class="card-body">
      
      <form action="{{ url('tareas') }}" method="post">
        {!! csrf_field() !!}
        <label>Tarea</label></br>
        <input type="text" name="nombre" id="nombre" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop