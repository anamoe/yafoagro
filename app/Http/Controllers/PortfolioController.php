<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = Portfolio::all();
        return view('admin.portfolio',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.portfolio-add');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
    
            'foto'=>'required',
   
        ]);
        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('portfolio');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        Portfolio::create($data);
        return redirect('admin/portfolio')
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
        $agen = Portfolio::find($id);
        return view('admin.portfolio-edit',compact('agen','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
  
        ]);
        
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('agen');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        Portfolio::findOrFail($id)->update($data);
        return redirect('admin/agen')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Portfolio::findOrFail($id)->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
