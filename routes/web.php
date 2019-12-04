<?php

Route::get('/', function () {

	// return view('files.index');
    return view('welcome');

    // para ver la vista del PDF
    // $pdf = PDF::loadView('welcome');
    // return $pdf->stream();
});

Route::resource('codes', 'CodeController');

Route::resource('file', 'FileController');

Route::get('download', function() {
	$pdf = PDF::loadView('welcome');

	return $pdf->download();
})->name('download');

Route::resource('users-pdf', 'UserController');