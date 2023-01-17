@extends('../layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Materiales</div>
                    <div class="card-body">
                        <a href="{{ url('/materiales/create') }}" class="btn btn-success btn-sm" title="Add New Material">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Material</th>
                                        <th>Tarea</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($materiales as $item)
                                    <tr>
                                        <td>{{ $item->m_name }}</td>
                                        <td>{{ $item->t_name }}</td>
                                        <td>
                                            <a href="{{ url('/materiales/' . $item->id) }}" title="View Material"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/materiales/' . $item->id . '/edit') }}" title="Edit Material"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/materiales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Material" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection