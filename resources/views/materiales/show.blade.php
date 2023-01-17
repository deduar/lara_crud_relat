@extends('../layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Material Page</div>
  <div class="card-body">
        <div class="card-body">
          {{-- <?php print_r($material); ?> --}}
        <h5 class="card-title">Material : {{ $material[0]->m_name }}</h5>
        <h5 class="card-title">Tarea : {{ $material[0]->t_name }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>