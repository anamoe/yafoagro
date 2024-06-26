<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\ProfilMitra;
use App\Models\Tanaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilMitraController extends Controller
{
    public function index()
    {
        $data = ProfilMitra::join('users', 'profil_mitras.user_id', 'users.id')
            ->select('users.*', 'profil_mitras.*')
            ->orderBy('profil_mitras.id', 'desc')->get();
        return view('admin.profilmitra', compact('data'));
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
        return view('admin.profilmitra-add', compact('user'));
    }

    public function store(Request $request)
    {
        //
        // return $request;

        $datauser = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:4',
            'email' => 'required',
        ], [
            // 'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',
            // 'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
            'password.min' => 'Password minimal harus 4 karakter.',
        ]);
        $user = User::where('username',$request->username)->first();

        if($user){
            return redirect()->back()
            ->with('error', ' username sudah ada');

        }

        $data = $request->validate([

            'nik' => 'required',
            'tgl_lahir' => 'required', 'tempat_lahir' => 'required',
            'nama_rekening' => 'required',
            'no_rekening' => 'required',
            'ahli_waris' => 'required', 'kode_pos' => 'required',
            'alamat' => 'required', 'no_hp' => 'required'

        ]);
        $datauser['role'] = 'mitra';
        $datauser['password'] = bcrypt($request->password);
        $u = User::create($datauser);

        $data['user_id'] = $u->id;




        if ($request->hasFile('foto_ktp')) {
            $tujuan_upload = public_path('ktp');
            $file = $request->file('foto_ktp');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto_ktp'] = $namaFile;
        }


        ProfilMitra::create($data);
        return redirect('admin/profilmitra')
            ->with('success', ' Berhasil Ditambahkan');
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
        $data = ProfilMitra::join('users', 'profil_mitras.user_id', 'users.id')
            ->select('users.*', 'profil_mitras.*')
            ->where('profil_mitras.id', $id)
            ->first();
        return view('admin.profilmitra-edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //
        $mitra = ProfilMitra::where('id', $id)->first();
        $datauser = $request->validate([
            'email' => 'required',
            'name' => 'required', 'username' => 'required',

        ]);

        $data = $request->validate([

            'nik' => 'required',
            'tgl_lahir' => 'required', 'tempat_lahir' => 'required',
            'nama_rekening' => 'required',
            'no_rekening' => 'required', 'ahli_waris' =>
            'required', 'kode_pos' => 'required',
            'alamat' => 'required', 'no_hp' => 'required',

        ]);
        if ($request->password) {
            $datauser['password'] = bcrypt($request->password);
        }
        User::where('id', $mitra->user_id)->update($datauser);


        if ($request->hasFile('foto_ktp')) {
            $tujuan_upload = public_path('ktp');
            $file = $request->file('foto_ktp');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload . '/' . ProfilMitra::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['foto_ktp'] = $namaFile;
        }

        ProfilMitra::findOrFail($id)->update($data);
        return redirect('admin/profilmitra')
            ->with('success', ' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //     $p = ProfilMitra::findOrFail($id);
        //     $t = Tanaman::where('user_id',$p->user_id)->first();
        //     if($t){
        //     $m=MonitoringTanaman::where('tanaman_id',$t->id)->first();
        //     if($m){
        //         MonitoringTanaman::whereIn('tanaman_id',[$t->id])->delete();
        //         Tanaman::whereIn('user_id',[$p->user_id])->delete();

        //     }
        // }
        //     $p->delete();
        //     User::where('id',$p->user_id)->delete();
        $p = ProfilMitra::findOrFail($id);

        // Step 1: Retrieve all related plants
        $tanamans = Tanaman::where('user_id', $p->user_id)->get();

        foreach ($tanamans as $tanaman) {
            // Step 2: Delete all related monitoring records for each plant
            MonitoringTanaman::where('tanaman_id', $tanaman->id)->delete();
        }

        // Step 3: Delete all related plants
        Tanaman::where('user_id', $p->user_id)->delete();

        // Step 4: Delete the profile
        $p->delete();
            User::where('id',$p->user_id)->delete();


        return redirect()->back()->with('success', ' Berhasil DiHapus');
    }
}
