@extends('../layout')
@section('content')

    <div class="card">
        <div class="card-header">Materiales Page</div>
        <div class="card-body">

            <form action="{{ url('materiales') }}" method="post">
                {!! csrf_field() !!}
                <label>Nombre del material</label></br>
                <input type="text" name="nombre" id="nombre" class="form-control"></br>
                <label>Tareas</label></br>
                <select name="tarea_id" id="tarea_id" class="form-control">
                    <option value=""> -- Select One --</option>
                    @foreach ($tareas as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
