<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function LoginAlumni(){
		return view('Alumni/login');
	}

	function LoginProcessAlumni(){
		if (Auth::attempt(['nim' => request('nim'), 'password' => request('password')])) {
			return redirect('Alumni/beranda')-> with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal. Silahkan cek NIM dan password anda');
		}
	}

	function LoginAdmin(){
		return view('Admin.login');
	}

	function ProsesLoginAdmin(){
		if (Auth::guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal. Silahkan cek NIM dan password anda');
		}
	}

	function Logout(){
		Auth::logout();
		return redirect('/');
	}

}