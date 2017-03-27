<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
	public function index(Request $request)
	{
		$nama_variable = $request->input('nama');
		$bebas_aja = $request->input('email');
		$kelamin = $request->input('gender');
		$babu = $request->input('servant');

		return view('forms')
		->with('nama', $nama_variable)
		->with('email', $bebas_aja)
		->with('gender', $kelamin)
		->with('servant', $babu);		
	}   
}
