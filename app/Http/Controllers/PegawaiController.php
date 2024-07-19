<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Pegawai;
use App\Models\Document;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::all();
        return view(
            'pegawai.pegawai', 
            [
                'pegawai' => $pegawai,
            ]
        );
    }

    public function create(){
        return view('pegawai.create');
    }

    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maksimal :max karakter',
        ];

        $request->validate([
            'name' => 'required|min:5|max:20',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'tgl_lahir' => 'required',
            'file' => 'required|mimes:jpeg,bmp,png,pdf,jpg',
        ]);

        $name = $request->name;
        $alamat = $request->alamat;
        $pekerjaan = $request->pekerjaan;
        $tgl_lahir = $request->tgl_lahir;
        $country = $request->country;

        $new_pegawai = Pegawai::create([
            'name' => $name,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan,
            'tgl_lahir' => $tgl_lahir,
            'country' => $country,
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $ext = $request->file->extension();
            $doc = file_get_contents($path);
            $base64 = base64_encode($doc);
            $mime = $request->file('file')->getClientMimeType();
            
            $new_document = Document::create([
                'name'=> $request->file->getClientOriginalName(),
                'file' => $base64,
                'mime'=> $mime,
                'pegawai_id'=> $new_pegawai->id,
            ]);
        }

        return redirect('/');
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
         ]);
      
         $pegawai = Pegawai::find($id);
         $pegawai->name = $request->name;
         $pegawai->alamat = $request->alamat;
         $pegawai->pekerjaan = $request->pekerjaan;
         $pegawai->country = $request->country;
         $pegawai->save();
         return redirect('/');
    }

    public function delete($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/');
    }
}
