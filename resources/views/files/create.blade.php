{{-- @section('content') --}}
	<div class="container">
		<form method="POST" action="{{ route('file.store') }}"
				enctype="multipart/form-data">
				@csrf
			<label>Name</label>
			<input type="text" name="name"><br>
			<p>
				<label for="avatar">
					<input type="file" name="avatar">
				</label>
			</p>
			<div class="form-group">
				<button class="btn btn-primary">Enviar</button>
			</div>
		</form>

	</div>
{{-- @endsection --}}