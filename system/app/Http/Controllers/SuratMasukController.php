<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SuratMasukController extends Controller {
	function index(){
		$data['list_srt_msk'] = SuratMasuk::all();
		return view('Admin.Surat-Masuk.index', $data);
	}

	function store(Request $request){

		$srt_msk = new SuratMasuk;
		$srt_msk-> no_urut = request('no_urut');
		$srt_msk-> tanggal = request('tanggal');
		$srt_msk-> no_surat = request('no_surat');
		$srt_msk-> perihal = request('perihal');
		$srt_msk-> uraian = request('uraian');
		$srt_msk-> asal = request('asal');
		$srt_msk->handleUpload();

		$srt_msk-> save();
		return redirect ('Admin/surat-masuk')-> with ('success', 'Surat Masuk berhasil ditambahkan');

	}

	function show($id){

		$srt_msk = SuratMasuk::find($id);
		return view('Admin.Surat-Masuk.show', compact('srt_msk'));

	}

	function edit(SuratMasuk $srt_msk){
		$data['srt_msk'] = $srt_msk;
		return view('Admin.Surat-Masuk.edit', $data);
	}

	function update(SuratMasuk $srt_msk){
		$srt_msk-> no_urut = request('no_urut');
		$srt_msk-> tanggal = request('tanggal');
		$srt_msk-> no_surat = request('no_surat');
		$srt_msk-> perihal = request('perihal');
		$srt_msk-> uraian = request('uraian');
		$srt_msk-> asal = request('asal');
		$srt_msk->handleUpload();

		$srt_msk-> save();
		return redirect ('Admin/surat-masuk')-> with ('success', 'Surat Masuk berhasil diedit');

	}

	function destroy(SuratMasuk $srt_msk){
		$srt_msk->handleDelete();
		$srt_msk->delete();

		return redirect ('Admin/surat-masuk')-> with ('danger', 'Data berhasil dihapus');

	}

}