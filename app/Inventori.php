<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    protected $fillable =[
		'nama', 'kondisi', 'keterangan', 'jumlah', 'id_jenis', 'tanggal_register', 'id_ruang', 'kode_inventori', 'id_petugas'
	]; 
}
