<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\MonitoringTanaman;
use App\Models\User;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    //
    public function dashboard(){
        $data = MonitoringTanaman::
        join('users','monitoring_tanamen.user_id','users.id')
        ->join('tanamen','monitoring_tanamen.tanaman_id','tanamen.id')
        ->select('users.name','tanamen.nama_tanaman','monitoring_tanamen.*')
        ->where('nama_tanaman','talas')->where('user_id',auth()->user()->id)
        ->orderBy('tanggal','desc')
        ->get();
        return view('mitra.dashboard-mitra',compact('data'));
    }

    public function profilmitra()
    {
        $users = User::where('id', auth()->user()->id)->first();
        return view('mitra.profil-mitra', compact('users'));
    }

    public function infomitra()
    {
        $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        return view('mitra.info-mitra',compact('email','tiktok','instagram'));
    }
}
