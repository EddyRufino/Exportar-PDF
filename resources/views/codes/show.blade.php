@extends('welcome')

@section('content')

        <div class="visible-print text-center">
            {!! QrCode::size(100)->generate(Request::url()); !!}
            <p>Scan me to return to the original page.</p>
        </div>

	<p>{{ $code->name }}</p><br>
	<p>{{ $code->placa }}</p>

@endsection
