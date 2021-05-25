<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Compañia</th>
                <th>Telefono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($distribuidor as $distribuidor)
            <tr>
                <td>{{ $distribuidor->nombre }}</td>
                <td>{{ $distribuidor->compañia }}</td>
                <td>{{ $distribuidor->telefono }}</td>
                <td>
                    {{ Form::open(['route' => ['distribuidor.destroy', $distribuidor->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{ route('distribuidor.edit', [$distribuidor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                    </div>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
