<?php

namespace App\Models;
use App\Models\LPN;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuratMasuk extends Model{
	protected $table = 'srt_msk';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function lpn(){
		return $this->belongsTo(LPN::class, 'id_srt_msk', 'id');
	}

	function handleUpload(){

		if(request()->hasFile('file')){
			$file = request()->file('file');
			$destination = "file/surat-masuk";
			$randomStr = Str::random(5);
			$filename = $this->no_urut."-".time()."-".$randomStr.".".$file->extension();
			$url = $file->storeAs($destination, $filename);
			$this->file = "app/".$url;
			$this->save;
		}
	}
	
	function handleDelete(){
		$file = $this->file;
		return true;
	}
}