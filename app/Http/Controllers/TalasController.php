<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class TalasController extends Controller
{
    public function index()
    {
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')
        ->get();
        return view('admin.monitoringtalas',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tanaman-add');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
    
            'nama_tanaman'=>'required',
            'no_sertifikat'=>'required',
            'no_registrasi'=>'required',
            'kode_area'=>'required',
            'jumlah_bibit'=>'required',
            'alamat_cluster'=>'required',
   
        ]);
        
        // if($request->hasFile('foto')){
        //     $tujuan_upload = public_path('portfolio');
        //     $file = $request->file('foto');
        //     $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
        //     $file->move($tujuan_upload, $namaFile);
        //     $data['foto'] = $namaFile;
        // }

        Tanaman::create($data);
        return redirect('admin/tanaman')
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
        $data = Tanaman::find($id);
        return view('admin.tanaman-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
            'nama_tanaman'=>'required',
            'no_sertifikat'=>'required',
            'no_registrasi'=>'required',
            'kode_area'=>'required',
            'jumlah_bibit'=>'required',
            'alamat_cluster'=>'required',
        ]);
        
        // if($request->hasFile('foto')){
        //     $tujuan_upload = public_path('portfolio');
        //     $file = $request->file('foto');
        //     $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
        //     File::delete($tujuan_upload.'/'.Portfolio::find($id)->foto);
        //     $file->move($tujuan_upload, $namaFile);
        //     $data['foto'] = $namaFile;
        // }

        Tanaman::findOrFail($id)->update($data);
        return redirect('admin/tanaman')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tanaman::findOrFail($id)->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
