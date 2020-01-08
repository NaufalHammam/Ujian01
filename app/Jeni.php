<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeni extends Model
{
    protected $fillable =[
		'nama_jenis', 'kode_jenis', 'keterangan', 
	]; 
}
