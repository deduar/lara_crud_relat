@extends('../layout')
@section('content')

    <div class="card">
        <div class="card-header">Materiales Page</div>
        <div class="card-body">

          {{-- <?php print_r($tareas); ?> --}}
            <form action="{{ url('materiales/' . $material->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $material->id }}" id="id" />
                <label>Nombre</label></br>
                <input type="text" name="nombre" id="nombre" value="{{ $material->nombre }}"
                    class="form-control"></br>
                <label>Tareas</label></br>
                <select name="tarea_id" id="tarea_id" class="form-control">
                    @foreach ($tareas as $item)
                        <option value="{{ $item->id }}" <?php if($material->tarea_id == $item->id){ echo "selected";} ?>>{{ $item->nombre }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>


        </div>
    </div>

@stop
