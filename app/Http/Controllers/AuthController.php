<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function login()
    {
        if(auth()->check()){
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('/admin/akunmitra');
                    break;
                case 'mitra':
                    return redirect('/mitra/dashboard');
                    break;
            }
        }
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {

        $input = $request->all();
        $rules = [

            'username'     => 'required',
            'password'  => 'required',

        ];
        // error message untuk validasi
        $message = [
            'required' => ':attribute tidak boleh kosong!'
        ];
        // instansiasi validator
        $validator = Validator::make($request->all(), $rules, $message);

        // proses validasi
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (User::where('username', '=', $input['username'])->first() == true) {
            if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
                switch (auth()->user()->role) {
                    case 'admin':
                        return redirect('admin/portfolio');

                        break;
                    case 'mitra':
                        return redirect('mitra/dashboard');
                        break;
                }
            } else {
                return redirect()->back()
                    ->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()
                ->with('error', 'username tidak ada atau belum terdaftar');
        }
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }

    public function profil()
    {
        $users = User::where('id', auth()->user()->id)->first();
        return view('admin.profil', compact('users'));
    }

    public function profile_update(Request $request)
    {
        $req = $request->all();
        if($request->password){
            auth()->user()->update([
                'password'=> bcrypt($request->password),
                // 'name'=>$request->name,
                'username'=>$request->username,
            ]);


        }else{
           
            // if($request->hasFile('foto')){
            //     $tujuan_upload = public_path('images/profil');
            //     $file = $request->file('foto');
            //     $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            //     $file->move($tujuan_upload, $namaFile);
            //     // return $file;
            //     $req['foto'] = $namaFile;
            // }
            // // return $req;
            auth()->user()->update([
                // 'name'=>$request->name,
                'username'=>$request->username,
            ]);
        }

       
        return redirect()->back()->with('success','Profil Berhasil diupdate');
    }


    public  function lupa_password(){
        return view('auth.lupa_password');
    }

    public function lupa_password_post(Request $request){
        $cek= User::where('username',$request->username)->first();
        $token = $this->getRandomString();

        if($cek){
            $cek->update([
                'token_reset'=>$token
            ]);
            return redirect('password-baru/'.$token)
            ->with('success', 'Silahkan merubah password baru anda');

        }else{
            return redirect()->back()
            ->with('error', 'username tidak terdaftar. silahkan masukkan username terdaftar');

        }
        
    }

    public function password_baru($token_reset)
    { 
        return view('auth.password_baru',compact('token_reset'));
    }
    public function password_baru_post($token_reset,Request $request)
    {
        $rules = [

 
            'password'  => 'required',
            // 'ulangi_password'=>'same:password'
             
        ];
          // error message untuk validasi
          $message = [
            'required' => ':attribute tidak boleh kosong!'
        ];
        // instansiasi validator
        $validator = Validator::make($request->all(), $rules, $message);
        
        // proses validasi
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        if($request->password!=$request->ulang_password){
            return redirect()->back()->with('error', 'Pastikan Password dan Konfirmasi Password Sama');
    
        }else{

            $token_lp = User::where('token_reset',$token_reset)->update([
                'password'=>bcrypt($request->password),
                'token_reset'=>''
               
            ]);
    
            if($token_lp){
             return redirect('login')
                ->with('success', 'berhasil ubah password,silahkan login kembali');
    
            }else{
    
                return redirect()->back()->with('error', 'Gagal ubah password');
    
            }
          
            
        }
       
    }

    public function getRandomString($panjang = 30){
		$karakter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$panjang_karakter = strlen($karakter);
		$randomString = '';
		for ($i = 0; $i < $panjang; $i++) {
			$randomString .= $karakter[rand(0, $panjang_karakter - 1)];
		}
		return $randomString;
	}

}
