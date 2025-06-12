<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    protected $fillable = [
        'aktivitas',
        'content',
        'user_id',
    ];
    public function user() // Use camel case for method names
    {
        return $this->belongsTo(User::class); // Corrected to belongsTo
    }

}
