<?php

namespace App\Http\Controllers;

use App\Models\BeritaArtike;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $data = BeritaArtike::all();
        return view('admin.berita',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.berita-add');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
    
            'judul'=>'required',
            'link'=>'required',
            'foto'=>'required',
        ]);
        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('berita');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        BeritaArtike::create($data);
        return redirect('admin/berita')
        ->with('success',' Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = BeritaArtike::find($id);
        return view('admin.berita-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
            'judul'=>'required',
            'link'=>'required',
        ]);
        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('berita');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.BeritaArtike::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        BeritaArtike::findOrFail($id)->update($data);
        return redirect('admin/berita')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p= BeritaArtike::findOrFail($id);
        $tujuan_upload = public_path('berita');
        if($p){

           
            File::delete($tujuan_upload . '/' . BeritaArtike::find($id)->foto);
        }
        $p->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
