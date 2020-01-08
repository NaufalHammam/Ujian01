<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_pinjam extends Model
{

     protected $fillable =[
		'id_inventaris', 'tanggal_pinjam', 'tanggal_kembali', 'jumlah', 'status_peminjaman', 'id_pegawai'
	];
}
