<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        //ambil data user dan disimpan pada var $user
        $user = Auth::user();

        if($user){
            //jika user admin
            if($user->level_id == '1'){
                return redirect()->intended('admin');
            }
            //jika user manager
            else if($user->level == '2'){
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }
    public function proses_login(Request $request){
        //validasi saat tombol login diklik
        //username dan password wajib diisi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //ambil data request username dan password
        $credential = $request->only('username', 'password');
        //cek kesesuaian data
        if (Auth::attempt($credential)){
            //jika berhasil simpan data dalam $user
            $user = Auth::user();

            //cek penyesuaian level
            if($user->level_id == '1'){
                //dd($user->level_id);
                return redirect()->intended('admin');
            }else if($user->level_id == '2'){
                return redirect()->intended('manager');
            }
            //jika belum ada role kembali ke halaman
            return redirect()->intended('/');

        }
        //kembali ke hal. login
        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'Pastikan kembali username dan password yang dimasukkan sudah benar']);
    }

    public function register(){
        return view('register');
    }

    public function proses_register(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        UserModel::create($request->all());
        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session->flush();
        Auth::logout();
        return redirect('login');
    }
}