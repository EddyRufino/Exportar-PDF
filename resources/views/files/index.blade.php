<div class="container">
	@foreach ($files as $file)
		<img src="Storage::url{{ $file->avatar }}" alt="">
		<a href="{{ route('file.show', $file->id) }}">{{ $file->avatar }}</a><br>
		{{-- <p>{{ $file->avatar }}</p> --}}
	@endforeach
</div>