<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KontakController extends Controller
{
    public function index()
    {
        $data = Kontak::get();
        return view('admin.kontak',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.kontak-add');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
    
            'isi'=>'required',
            'judul'=>'required',
   
        ]);
        
 
        

        Kontak::create($data);
        return redirect('admin/kontak')
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
        $data = Kontak::find($id);
        return view('admin.kontak-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
            // 'isi'=>'required',
            'judul'=>'required',
        ]);
        
        // if($request->maps){

            $parts = explode('src="', $request->isi);
            return $parts;
            $huruf_a = str_replace(['[', ']', '"'], '', $parts);
            return $huruf_a;
            $data['isi'] = $parts;
    

        // }
        
      

        Kontak::findOrFail($id)->update($data);
        return redirect('admin/kontak')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $k = Kontak::findOrFail($id)->first();

        if($k->type=='tentangkami'){
            $tujuan_upload = public_path('tentangkami');
        }elseif($k->type=='beranda'){
            $tujuan_upload = public_path('beranda');

        }
        File::delete($tujuan_upload.'/'.Kontak::find($id)->foto);
        $k->delete();


        return redirect()->back()->with('success',' Berhasil DiHapus');
    }

    public function index_tentangkami(Request $request)
    {

        $about = Kontak::where('type','tentangkami')->first();
        return view('admin.about',compact('about'));
    }

  
    public function update_tentangkami(Request $request,$id)
    {

        //
        $data = $request->validate([
            'isi'=>'required',
            // 'foto'=>'required',
        ]);
        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('tentangkami');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        Kontak::findOrFail($id)->update($data);
        return redirect('admin/tentangkami')
        ->with('success',' Berhasil DiUpdate');
    }
}
