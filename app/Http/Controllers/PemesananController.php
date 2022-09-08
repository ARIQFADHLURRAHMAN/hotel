<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Storage;

class PemesananController extends Controller
{
    public function index(){
        $data = pemesanan::all();
        return view('pemesanan', compact('data'));
    }

    public function create(){
        return view('tambahpemesanan');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'namaguru' => 'required',
            'matapelajaran' => 'required',
            'materipelajaran' => 'required',
            'jampelajaran' => 'required',
            'absensi' => 'required',
            'kelas' => 'required',
            'jenispembelajaran' => 'required',
            'linkpembelajaran' => 'required',
            'keterangan' => 'required',
        ]);
            return redirect(route('pemesanan'));

        
}

    
    public function tampilan($id){
        $data = pemesanan::find($id);
        return view('editpemesanan', compact('data'));
    }
    
    public function update(request $request,$id){
        $data = pemesanan::find($id);
        $data->update($request->all());
        return redirect()->route('pemesanan');
    }
    
    public function destroy($id){
        $data = pemesanan::find($id);
        $data->delete();
        return redirect('/pemesanan');
    }
}
    
    

