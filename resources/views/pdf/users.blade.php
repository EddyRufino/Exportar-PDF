<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">Nombre</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td class="table-success">{{ $user->name }}</td>
					<td class="table-danger">{{ $user->email }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>