<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partai extends Model
{
    protected $fillable = ['name_partai', 'gambar_partai'];

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
