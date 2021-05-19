<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    // digunakan ketika menggunakan create()
    protected $fillable = ['nama_hewan', 'jenis_hewan', 'status_kehidupan'];
}
