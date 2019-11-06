<?php

Route::get('/', function () {
    return view('welcome');

    // para ver la vista del PDF
    // $pdf = PDF::loadView('welcome');
    // return $pdf->stream();
});

Route::get('download', function() {
	$pdf = PDF::loadView('welcome');

	return $pdf->download();
})->name('download');

Route::resource('users-pdf', 'UserController');