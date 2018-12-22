<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    public function user() {
        return $this->hasOne('App\User');
    }

    protected $uploads = '/images/';
    public function getFileAttribute($photo) {
        return $this->uploads.$photo;
    }
}
