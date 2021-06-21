<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/G6nD3K8I5EGxPLnwgGr9CIkntZzKN9a23amlxAal.png';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
