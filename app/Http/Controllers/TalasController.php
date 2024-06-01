<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\Tanaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $users =User::where('role','mitra')->get();
        return view('admin.monitoringtalas-add',compact('users'));
    }

    public function store(Request $request)
    {
        //
        $tanaman =Tanaman::where('nama_tanaman','talas')->first();
        $data = $request->validate([
    
            'judul'=>'required',
            'tanggal'=>'required',
   
        ]);
            $data['user_id'] = $request->user_id;
            $data['tanaman_id'] = $tanaman->id;
          

        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        MonitoringTanaman::create($data);
        return redirect('admin/monitoring-talas')
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
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('monitoring_tanamen.id',$id)
        ->first();
        return view('admin.monitoringtalas-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
    
            'judul'=>'required',
            'tanggal'=>'required',
   
        ]);
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }
       

        MonitoringTanaman::findOrFail($id)->update($data);
        return redirect('admin/monitoring-talas')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $p= MonitoringTanaman::findOrFail($id);
        $tujuan_upload = public_path('monitoring-talas');
        if($p){
           
            File::delete($tujuan_upload . '/' . MonitoringTanaman::find($id)->foto);
        }
        $p->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
