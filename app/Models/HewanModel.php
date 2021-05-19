<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HewanModel extends Model
{
    use HasFactory;

    // Jika nama tabel keluar dari aturan default Laravel maka nama tabel harus di definisikan
    protected $table = 'tb_hewan';
    public $timestamps = false;

    // digunakan ketika menggunakan create()
    protected $fillable = ['nama_hewan', 'jenis_hewan', 'status_kehidupan'];
}
