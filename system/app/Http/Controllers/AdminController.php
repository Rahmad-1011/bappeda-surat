<?php
namespace App\Http\Controllers;
use App\Models\Admin;

class AdminController extends Controller{
	
	function index(){
		return view('Admin.beranda');
	}

	function create(){
		return view('Admin.daftar-admin');

	}

	function store(){
		$admin = new Admin;
		$admin-> nama = request('nama');
		$admin-> username = request('username');
		$admin-> password= bcrypt(request('password'));
		
		$admin-> save();

		return redirect ('Admin/login')-> with('success', 'Admin berhasil ditambahkan');

	}
}