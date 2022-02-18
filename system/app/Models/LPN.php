<?php

namespace App\Models;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Support\Str;

class LPN extends Model{
	protected $table = 'lpn';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function srt_msk(){
		return $this->belongsTo(SuratMasuk::class);
	}

	function handleUploadDoc(){
		if(request()->hasFile('doc')){
			$doc = request()->file('doc');
			$destination = "doc/pesanan";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$doc->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->doc = "app/".$url;
			$this->save;
		}
	}
	function handleDeleteDoc(){
		$doc = $this->doc;
		return true;
	}
}