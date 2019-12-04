<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CodeController extends Controller
{

    public function index()
    {
        $codes = Code::all();
        return view('codes.index', compact('codes'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Code $code)
    {
        $codeq= QrCode::size(100)->generate('http://pdf.test/codes');
       return view('codes.show', compact('code'));
    }


    public function edit(Code $code)
    {
        //
    }


    public function update(Request $request, Code $code)
    {
        //
    }


    public function destroy(Code $code)
    {
        //
    }
}
