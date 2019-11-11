<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }


    public function create()
    {
        return view('files.create');
    }


    public function store(Request $request)
    {
        $file = (new File)->fill($request->all());

        $file->avatar = $request->file('avatar')->store('public');

        $file->save();

        return back();
    }


    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }


    public function edit(File $file)
    {
        //
    }


    public function update(Request $request, File $file)
    {
        //
    }


    public function destroy(File $file)
    {
        //
    }
}
