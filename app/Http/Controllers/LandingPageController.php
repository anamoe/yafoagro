<?php

namespace App\Http\Controllers;

use App\Models\BeritaArtike;
use App\Models\Kontak;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index(){
        $portfolio = Portfolio::orderBy('id', 'desc')->limit(6)->get();
        $berita = BeritaArtike::orderBy('id', 'desc')->limit(6)->get();
        $visi = Kontak::where('type', 'visi')->first();
        $misi = Kontak::where('type', 'misi')->get();
        $telp = Kontak::where('type', 'no_telp')->first();
        $lokasi = Kontak::where('type', 'lokasi')->first();
        $maps = Kontak::where('type', 'maps')->first();
        $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        $tentangkami = Kontak::where('type', 'tentangkami')->first();
        $beranda = Kontak::where('type', 'beranda')->first();




        return view('landingpage',compact('portfolio','beranda','tentangkami','instagram',
        'tiktok','email','lokasi','telp','misi','visi','maps','berita'));
    }

    public function detailberita(){
        $portfolio = Portfolio::orderBy('id', 'desc')->limit(6)->get();

        $berita = BeritaArtike::orderBy('id', 'desc')->get();
        $visi = Kontak::where('type', 'visi')->first();
        $misi = Kontak::where('type', 'misi')->get();
        $telp = Kontak::where('type', 'no_telp')->first();
        $lokasi = Kontak::where('type', 'lokasi')->first();
        $maps = Kontak::where('type', 'maps')->first();
        $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        $tentangkami = Kontak::where('type', 'tentangkami')->first();
        $beranda = Kontak::where('type', 'beranda')->first();

 
        return view('detail-berita',compact('portfolio','beranda','tentangkami','instagram',
        'tiktok','email','lokasi','telp','misi','visi','maps','berita'));
    }

    public function detailgaleri(){
        $portfolio = Portfolio::orderBy('id', 'desc')->limit(6)->get();

        $berita = BeritaArtike::orderBy('id', 'desc')->get();
        $visi = Kontak::where('type', 'visi')->first();
        $misi = Kontak::where('type', 'misi')->get();
        $telp = Kontak::where('type', 'no_telp')->first();
        $lokasi = Kontak::where('type', 'lokasi')->first();
        $maps = Kontak::where('type', 'maps')->first();
        $email = Kontak::where('type', 'email')->first();
        $tiktok = Kontak::where('type', 'tiktok')->first();
        $instagram = Kontak::where('type', 'instagram')->first();
        $tentangkami = Kontak::where('type', 'tentangkami')->first();
        $beranda = Kontak::where('type', 'beranda')->first();

 
        return view('detail-galeri',compact('portfolio','beranda','tentangkami','instagram',
        'tiktok','email','lokasi','telp','misi','visi','maps','berita'));
    }
}
