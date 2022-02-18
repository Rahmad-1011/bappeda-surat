<?php

namespace App\Http\Controllers;
use App\Models\SuratKeluar;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller {
	function index(){
		$data['list_srt_klr'] = SuratKeLuar::all();
		return view('Admin.Surat-Keluar.index', $data);
	}

	function store(Request $request){

		$srt_klr = new SuratKeluar;
		$srt_klr-> no_urut = request('no_urut');
		$srt_klr-> tanggal = request('tanggal');
		$srt_klr-> no_surat = request('no_surat');
		$srt_klr-> klasifikasi = request('klasifikasi');
		$srt_klr-> unit = request('unit');
		$srt_klr->handleUpload();

		$srt_klr-> save();
		return redirect ('Admin/surat-keluar')-> with ('success', 'Surat Keluar berhasil ditambahkan');

	}

	function show($id){

		$srt_klr=SuratKeluar::find($id);
		return view('Admin.Surat-Keluar.show', compact('srt_klr'));

	}

	function edit(SuratKeluar $srt_klr){
		$data['srt_klr'] = $srt_klr;
		return view('Admin.Surat-Keluar.edit', $data);
	}

	function update(SuratKeluar $srt_klr){
		$srt_klr-> no_urut = request('no_urut');
		$srt_klr-> tanggal = request('tanggal');
		$srt_klr-> no_surat = request('no_surat');
		$srt_klr-> klasifikasi = request('klasifikasi');
		$srt_klr-> unit = request('unit');
		$srt_klr->handleUpload();

		$srt_klr-> save();
		return redirect ('Admin/surat-keluar')-> with ('success', 'Surat Keluar berhasil diedit');

	}

	function destroy(SuratKeluar $srt_klr){
		$srt_msk->handleDelete();
		$srt_msk->delete();

		return redirect ('Admin/surat-masuk')-> with ('danger', 'Data berhasil dihapus');

	}


}