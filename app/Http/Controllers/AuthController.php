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
                    // return redirect('/mitra/dashboard');
                    return 'mitra';
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
                        return 'mitra';
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
}
