<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $data = Portfolio::find($id);
        return view('admin.portfolio-edit',compact('data','id'));
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
            $tujuan_upload = public_path('portfolio');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            File::delete($tujuan_upload.'/'.Portfolio::find($id)->foto);
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        Portfolio::findOrFail($id)->update($data);
        return redirect('admin/portfolio')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

       $p= Portfolio::findOrFail($id);
        $tujuan_upload = public_path('portfolio');
        if($p){

           
            File::delete($tujuan_upload . '/' . Portfolio::find($id)->foto);
        }
        $p->delete();
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }
}
