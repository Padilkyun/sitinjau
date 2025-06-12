<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;

    protected $table = 'experiences'; // Optional: specify the table name

    protected $fillable = [
        'judul',
        'perusahaan',
        'jabatan',
        'lokasi',
        'tahun_mulai',
        'tahun_berakhir',
        'deskripsi',
        'user_id',
        'lembaga',
    ];
    public function user() // Use camel case for method names
    {
        return $this->belongsTo(User::class); // Corrected to belongsTo
    }
}
