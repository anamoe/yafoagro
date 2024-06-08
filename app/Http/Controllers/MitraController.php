<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\MonitoringTanaman;
use App\Models\ProfilMitra;
use App\Models\Tanaman;
use App\Models\User;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    //

    public function kebunku(){
        return view('mitra.kebunku');
    }
    public function dashboard(){
        $maps = Kontak::where('type', 'maps')->first();

        return view('mitra.dashboard-mitra',compact('maps'));
    }

    public function talas(){
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('users.id',auth()->user()->id)
        // ->orderBy('tanggal','asc')
        ->get();
        // return $data;
        return view('mitra.talas',compact('data'));
    }
    public function alpukat()
    {
        return view('mitra.alpukat');
    }


    public function profilmitra()
    {
        $data = ProfilMitra::join('users','profil_mitras.user_id','users.id')
        ->select('profil_mitras.*','users.*')
        ->where('users.id', auth()->user()->id)->first();
        // return $data;
        return view('mitra.profil-mitra', compact('data'));
    }

    public function infomitra()
    {
        $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        return view('mitra.info-mitra',compact('email','tiktok','instagram'));
    }

    public function simulasi_panen()
    {  $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        $jumlahbibit= Tanaman::where('user_id',auth()->user()->id)->first();
        return view('mitra.simulasi-panen',compact('email','jumlahbibit','tiktok','instagram'));
    }

    public function tanaman()
    {  $data = Tanaman::where('user_id',auth()->user()->id)->first();

        return view('mitra.tanaman-mitra',compact('data'));
    }
}
