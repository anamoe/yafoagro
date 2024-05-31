<?php

namespace App\Http\Controllers;

use App\Models\ProfilMitra;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilMitraController extends Controller
{
    public function index()
    {
        $data = ProfilMitra::join('users','profil_mitras.user_id','users.id')
        ->select('users.*','profil_mitras.*')
        ->orderBy('profil_mitras.id','desc')->get();
        return view('admin.profilmitra',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = User::where('role', 'mitra')
        ->whereDoesntHave('mitra')
        ->get();
        // return $user;
        return view('admin.profilmitra-add',compact('user'));
    }

    public function store(Request $request)
    {
        //
        // return $request;
        $datauser = $request->validate([
            'name'=>'required','username'=>'required','password'=>'required',
   
        ]);
        $data = $request->validate([
    
            'bukti_transfer'=>'required','nik'=>'required',
            'tgl_lahir'=>'required','tempat_lahir'=>'required',
            'luas_lahan'=>'required','nama_rekening'=>'required',
            'no_rekening'=>'required','bibit'=>'required',
            'ahli_waris'=>'required','kode_pos'=>'required',
            'alamat'=>'required','no_hp'=>'required','kemitraan'=>'required',
   
        ]);
        $datauser['role'] = 'mitra';
        $datauser['password'] = bcrypt($request->password);
        $u = User::create($datauser);

        $data['user_id'] = $u->id;
       

        
        
        if($request->hasFile('bukti_transfer')){
            $tujuan_upload = public_path('bukti_transfer');
            $file = $request->file('bukti_transfer');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['bukti_transfer'] = $namaFile;
        }
      

        ProfilMitra::create($data);
        return redirect('admin/profilmitra')
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
        $data = ProfilMitra::join('users','profil_mitras.user_id','users.id')
        ->select('users.*','profil_mitras.*')
        ->where('profil_mitras.id',$id)
        ->first();
        return view('admin.profilmitra-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $mitra = ProfilMitra::where('id',$id)->first();
        $datauser = $request->validate([
            'name'=>'required','username'=>'required',
   
        ]);
        $data = $request->validate([
    
            'nik'=>'required',
            'tgl_lahir'=>'required','tempat_lahir'=>'required',
            'luas_lahan'=>'required','nama_rekening'=>'required',
            'no_rekening'=>'required','bibit'=>'required',
            'ahli_waris'=>'required','kode_pos'=>'required',
            'alamat'=>'required','no_hp'=>'required','kemitraan'=>'required',
   
        ]);
        if($request->password){
            $datauser['password'] = bcrypt($request->password);
        }
        User::where('id',$mitra->user_id)->update($datauser);

        
        if($request->hasFile('bukti_transfer')){
            $tujuan_upload = public_path('bukti_transfer');
            $file = $request->file('bukti_transfer');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.ProfilMitra::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['bukti_transfer'] = $namaFile;
        }

        ProfilMitra::findOrFail($id)->update($data);
        return redirect('admin/profilmitra')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ProfilMitra::findOrFail($id)->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
