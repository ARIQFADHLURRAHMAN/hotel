<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){ 
 
        $data = kelas::all(); 
        return view('kelas', compact('data')); 
    } 
 
    public function create(){ 
        return view('tambahkelas'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'namakelas'=> 'required', 
            'walikelas'=> 'required', 
        ]); 
        kelas::create($request->all()); 
        return redirect()->route('kelas'); 
    } 
 
    public function tampilankelas($id){ 
        $data = kelas::find($id); 
        return view('editkelas', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = kelas::find($id); 
        $data->update($request->all()); 
        return redirect()->route('kelas'); 
    } 
 
    public function destroy($id){ 
        $data = kelas::find($id); 
        $data->delete(); 
        return redirect()->route('kelas'); 
    }
}
