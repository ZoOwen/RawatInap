<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Spesialis;
class SpesialisController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $spesialis = Spesialis::all();
        return view('spesialis', compact('user', 'spesialis'));
    }

    public function store(Request $request){
        $validate = $request->all([
            'id_spesialis' => 'required|max:20',
            'nama_spesialis' => 'required|max:255',
            'tanggal' => 'required' ,
        ]);

        Spesialis::updateOrCreate([
            'id_spesialis' => $request->id_spesialis
        ],
        [
            'nama_spesialis' => $request->nama_spesialis, 
            'tanggal' => $request->tanggal
        ]);        
        // $spesialis = new spesialis;
        // // $spesialis->id_spesialis = $request->get('id_spesialis');
        // $spesialis->nama_spesialis = $request->get('nama_spesialis');
        // $spesialis->tanggal = $request->get('tanggal');

        // $spesialis->save();

        $notification = array(
            'message' => 'Data Spesialis berhasiil ditambahkan','alert-type' => 'success'
        );

        return redirect()->route('spesialis.index')->with($notification);
    }

    public function edit($id)
    {
        $spesialis = spesialis::find($id);
        return response()->json($spesialis);
    }

    
}
