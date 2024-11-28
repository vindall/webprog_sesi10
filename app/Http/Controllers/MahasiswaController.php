<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App;

class MahasiswaController extends Controller
{

  public function create($locale)
  {
    App::setlocale($locale);
    return view('form-pendaftaran');
  }

  public function store(Request $request, $locale){
    App::setlocale($locale);
    $validateData = $request->validate([
      'nim' => 'required|size:10',
      'name' => 'required|min:3|max:50',
      'email' => 'required|email',
      'gender' => 'required|in:M,F',
      'major' => 'required',
      'address' => '',
    ]);

    return redirect()->route('create', ['locale' => $locale])->with('success', 'Data saved successfully!');
    
  }
}
