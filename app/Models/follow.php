<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    protected $fillable = [
        'follower_id',
        'followed_id',
    ];
    public function user()
{
    return $this->belongsToMany(User::class,  'user_id', 'followed_id');
}
public function follower()
{
    return $this->belongsTo(User::class, 'follower_id'); // This links to the user who follows
}

public function followed()
{
    return $this->belongsTo(User::class, 'followed_id'); // This links to the user being followed
}

}
