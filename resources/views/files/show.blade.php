<div class="container">
	<img width="100px" src="{{ Storage::url($file->avatar) }} " alt=""><br>
	<a href="{{ Storage::url($file->avatar) }}">{{ $file->name }}</a>
</div>