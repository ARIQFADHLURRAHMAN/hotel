<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = guru::all();
        return view('guru', compact('data'));
    }

    public function create(){
        return view('tambahdata');
    }
public function store(Request $request){
    $this ->validate($request, [
        'namaguru' => 'required',
        'nik' => 'required',
        'matapelajaran' => 'required',
        'username' => 'required',
        'password' => 'required',
    ]);
    guru::create($request->all());
    return redirect('/guru');
    
}

public function tampilan($id){
    $data = guru::find($id);
    return view('editdata', compact('data'));
}

public function update(request $request,$id){
    $data = guru::find($id);
    $data->update($request->all());
    return redirect()->route('guru');
}

public function destroy($id){
    $data = guru::find($id);
    $data->delete();
    return redirect('/guru');
}
}
