<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TanamanController extends Controller
{
    public function index()
    {
        $data = Tanaman::
        leftjoin('profil_mitras','tanamen.user_id','profil_mitras.user_id')
        ->join('users','tanamen.user_id','users.id')
        ->select('users.name','profil_mitras.*','tanamen.*')
        ->get();
        // return $data;
        return view('admin.tanaman',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::where('role','mitra')->get();
        return view('admin.tanaman-add',compact('users'));
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
    
            'nama_tanaman'=>'required',
            'no_sertifikat'=>'required',
            'no_registrasi'=>'required',
            'no_approval'=>'required',
            'no_id_pemilik'=>'required',
            'kode_area'=>'required',
            'jumlah_bibit'=>'required',
            'alamat_cluster'=>'required',
            'kemitraan'=>'required',  
            'bukti_transfer'=>'required',
            'luas_lahan'=>'required',
   
        ]);
        
        if ($request->hasFile('bukti_transfer')) {
            $tujuan_upload = public_path('bukti_transfer');
            $file = $request->file('bukti_transfer');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['bukti_transfer'] = $namaFile;
        }
        $data['user_id'] = $request->user_id;

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
        $data = Tanaman::    leftjoin('profil_mitras','tanamen.user_id','profil_mitras.user_id')
        ->join('users','tanamen.user_id','users.id')
        ->select('users.name','profil_mitras.*','tanamen.*')
        ->find($id);
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
        
        if ($request->hasFile('bukti_transfer')) {
            $tujuan_upload = public_path('bukti_transfer');
            $file = $request->file('bukti_transfer');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload . '/' . Tanaman::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['bukti_transfer'] = $namaFile;
        }
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
