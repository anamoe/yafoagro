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
        'username' => 'required|unique:users,username',
        'password' => 'required|min:4',
        'email' => 'required|unique:users,email',
    ], [
        'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',
        'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
        'password.min' => 'Password minimal harus 4 karakter.',
    ]);

        $data = $request->validate([

            'nik' => 'required',
            'tgl_lahir' => 'required', 'tempat_lahir' => 'required',
            'nama_rekening' => 'required',
            'no_rekening' => 'required',
            'ahli_waris' => 'required', 'kode_pos' => 'required',
            'alamat' => 'required', 'no_hp' => 'required','upload_ktp'

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
            'no_rekening' => 'required','ahli_waris' => 
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
        ProfilMitra::findOrFail($id)->delete();
        return redirect()->back()->with('success', ' Berhasil DiHapus');
    }
}
