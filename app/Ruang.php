<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $fillable =[
		'nama_ruang', 'kode_ruang', 'keterangan',
	]; 
}
