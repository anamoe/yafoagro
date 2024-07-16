<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\Tanaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\Monitor;
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
        $m = MonitoringTanaman::pluck('tanaman_id')->toArray();
        // return $monitoringTanamaIds;
        return view('admin.tanaman',compact('data','m'));
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
            // 'bukti_transfer'=>'required',
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
            'no_approval'=>'required',
            'no_id_pemilik'=>'required',
            'kode_area'=>'required',
            'jumlah_bibit'=>'required',
            'alamat_cluster'=>'required',
            'kemitraan'=>'required',  
            // 'bukti_transfer'=>'required',
            'luas_lahan'=>'required',
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
        $t = Tanaman::findOrFail($id);
        MonitoringTanaman::whereIn('tanaman_id',[$t->id])->delete();
        $t->delete();

        return redirect()->back()->with('success',' Berhasil DiHapus');
    }

    public function create_monitoring_tanaman($id){
        $t=Tanaman::where('id',$id)->first();
        MonitoringTanaman::create([
            'judul'=>'START OLAHAN, PEMUPUKAN DASAR DAN TANAM BIBIT',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);

        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN STARTER',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN STARTER',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PENGGULUTAN DAN PEMUPUKAN',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN DAN PENGGULUTAN TANAM',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PENGGULUTAN DAN PEMUPUKAN',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN ORGANIK',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'UJI SAMPLING DAN PEMUPUKAN',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PEMUPUKAN',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        MonitoringTanaman::create([
            'judul'=>'PANEN RAYA',
            'tanaman_id'=>$id,
            'user_id'=>$t->user_id,

        ]);
        return redirect()->back()->with('success',' Berhasil Menambah Daftar Monitoring');

    }
}
