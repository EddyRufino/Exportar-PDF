@extends('welcome')

@section('content')
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Last</th>
		      <th scope="col">Handle</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($codes as $code)
		    <tr>
		      <td>{{ $code->name }}</td>
		      <td>{{ $code->placa }}</td>
		      <td>
		      	<a href="{{ route('codes.show', $code->id) }}" target="_blank">QrCode</a>
		      </td>
		     </tr>
		     @empty
            	<li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
			@endforelse
		  </tbody>
		</table>
	</div>
@endsection