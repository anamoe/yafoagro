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

    public function talas($id_tanaman){
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('tanamen.id',$id_tanaman)
        // ->orderBy('tanggal','asc')
        ->get();
        $datas =Tanaman::
        where('nama_tanaman','talas')->where('id',$id_tanaman)
        ->orderBy('id','desc')
        ->first();
        // return $data;
        return view('mitra.talas',compact('data','datas'));
    }

    public function list_talas(){
        $datas =Tanaman::
        where('nama_tanaman','talas')->where('user_id',auth()->user()->id)
        ->orderBy('id','desc')
        ->get();
        // return $data;
        return view('mitra.list-talas',compact('datas'));
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
    {  $datas = Tanaman::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        return view('mitra.tanaman-mitra',compact('datas'));
    }
}
