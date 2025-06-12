<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'password',
        'partai_id',
        'birth_place',
        'origin_area',
        'poto',
        'dapil',
        'age'
    ];
    public function partai()
    {
        return $this->belongsTo(Partai::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

     public function posts()
     {
         return $this->hasMany(Post::class); // A user can have many posts
     }

     // User.php
public function follows()
{
    return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followed_id');
}

public function followings()
{
    return $this->follows(); // Alias for readability
}

public function followers()
{
    return $this->belongsToMany(User::class, 'follows', 'followed_id', 'follower_id');
}


}
