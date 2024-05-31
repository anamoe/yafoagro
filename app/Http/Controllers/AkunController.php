<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'mitra')->get();
        return view('admin.akunmitra', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.akunmitra-add');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([

            'name' => 'required',
            'username' => 'required',
            'password' => 'required',



        ]);
        $data['role'] = 'mitra';
        $data['password'] = bcrypt($request->password);

        // if($request->hasFile('foto')){
        //     $tujuan_upload = public_path('portfolio');
        //     $file = $request->file('foto');
        //     $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
        //     $file->move($tujuan_upload, $namaFile);
        //     $data['foto'] = $namaFile;
        // }

        User::create($data);
        return redirect('admin/akunmitra')
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
        $user = User::find($id);
        return view('admin.akunmitra-edit', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
        ]);

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        // if($request->hasFile('foto')){
        //     $tujuan_upload = public_path('portfolio');
        //     $file = $request->file('foto');
        //     $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
        //     File::delete($tujuan_upload.'/'.Portfolio::find($id)->foto);
        //     $file->move($tujuan_upload, $namaFile);
        //     $data['foto'] = $namaFile;
        // }

        User::findOrFail($id)->update($data);
        return redirect('admin/akunmitra')
            ->with('success', ' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', ' Berhasil DiHapus');
    }
}
