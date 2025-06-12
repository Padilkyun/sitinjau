<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class edu extends Model
{
    protected $fillable = [
        'judul',
        'tahun_mulai',
        'tahun_berakhir',
        'user_id',
        'image',
    ];
    public function user() // Use camel case for method names
    {
        return $this->belongsTo(User::class); // Corrected to belongsTo
    }
}
