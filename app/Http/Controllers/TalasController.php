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
        leftjoin('users','monitoring_tanamen.user_id','users.id')
        ->leftjoin('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.*','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')
        ->get();
        // return $data;
        return view('admin.monitoringtalas',compact('data'));
    }

    public function index_pertanaman($id_tanaman)
    {
        $tanaman = Tanaman::where('id',$id_tanaman)->first();
        $u = User::where('id',$tanaman->user_id)->first();
        $data = MonitoringTanaman::
        leftjoin('users','monitoring_tanamen.user_id','users.id')
        ->leftjoin('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.*','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('tanaman_id',$id_tanaman)
        ->get();
        // return $data;
       
        return view('admin.monitoring.monitoringtalas',compact('data','tanaman','u'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $allTanamans = Tanaman::all(); // Get all tanamans
        $mitraTanamans = Tanaman::pluck('id')->toArray(); // Get tanamans for this mitra

        $users =User::where('role','mitra')->get();
        return view('admin.monitoringtalas-add',compact('users','allTanamans'));
    }

    public function store(Request $request)
    {
        //

        $data = $request->validate([
    
            'judul'=>'required',
            'tanggal'=>'required',
   
        ]);
            $data['user_id'] = $request->user_id;
            $data['tanaman_id'] = $request->tanaman_id;
          

        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto1'] = $namaFile;
        }
        if($request->hasFile('foto2')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto2');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto2'] = $namaFile;
        }
        if($request->hasFile('foto3')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto3');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto3'] = $namaFile;
        }
        if($request->hasFile('foto4')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto4');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto4'] = $namaFile;
        }
        if($request->hasFile('foto5')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto5');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto5'] = $namaFile;
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

    public function edit_pertanaman(string $id)
    {
        //
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('monitoring_tanamen.id',$id)
        ->first();
        return view('admin.monitoring.monitoringtalas-edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
    
            'judul'=>'required',
            // 'tanggal'=>'required',
   
        ]);
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto1);
            $file->move($tujuan_upload, $namaFile);
            $data['foto1'] = $namaFile;
        }
        if($request->hasFile('foto2')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto2');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto2);
            $file->move($tujuan_upload, $namaFile);
            $data['foto2'] = $namaFile;
        } if($request->hasFile('foto3')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto3');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto3);
            $file->move($tujuan_upload, $namaFile);
            $data['foto3'] = $namaFile;
        } if($request->hasFile('foto4')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto4');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto4);
            $file->move($tujuan_upload, $namaFile);
            $data['foto4'] = $namaFile;
        } if($request->hasFile('foto5')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto5');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto5);
            $file->move($tujuan_upload, $namaFile);
            $data['foto5'] = $namaFile;
        }
        $data['status'] = $request->status;
        $data['keterangan'] = $request->keterangan;

        MonitoringTanaman::findOrFail($id)->update($data);
        return redirect('admin/monitoring-talas')
        ->with('success',' Berhasil DiUpdate');
    }

    public function update_pertanaman(Request $request, string $id)
    {
        //
        $t= MonitoringTanaman::find($id);
        $data = $request->validate([
    
            'judul'=>'required',
            // 'tanggal'=>'required',
   
        ]);
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto1);
            $file->move($tujuan_upload, $namaFile);
            $data['foto1'] = $namaFile;
        }
        if($request->hasFile('foto2')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto2');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto2);
            $file->move($tujuan_upload, $namaFile);
            $data['foto2'] = $namaFile;
        } if($request->hasFile('foto3')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto3');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto3);
            $file->move($tujuan_upload, $namaFile);
            $data['foto3'] = $namaFile;
        } if($request->hasFile('foto4')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto4');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto4);
            $file->move($tujuan_upload, $namaFile);
            $data['foto4'] = $namaFile;
        } if($request->hasFile('foto5')){
            $tujuan_upload = public_path('monitoring-talas');
            $file = $request->file('foto5');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.MonitoringTanaman::find($id)->foto5);
            $file->move($tujuan_upload, $namaFile);
            $data['foto5'] = $namaFile;
        }
        $data['status'] = $request->status;
        $data['keterangan'] = $request->keterangan;


        MonitoringTanaman::findOrFail($id)->update($data);
        return redirect('admin/monitoring-talas/'.$t->tanaman_id)
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
            File::delete($tujuan_upload . '/' . MonitoringTanaman::find($id)->foto2);
            File::delete($tujuan_upload . '/' . MonitoringTanaman::find($id)->foto3);
            File::delete($tujuan_upload . '/' . MonitoringTanaman::find($id)->foto4);
            File::delete($tujuan_upload . '/' . MonitoringTanaman::find($id)->foto5);
        }
        $p->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }

    
    public function getTanamans($user_id)
    {
       
        $tanamans = Tanaman::where('user_id', $user_id)->get();
        return response()->json($tanamans);
    }
}
