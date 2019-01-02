<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'category_id',
        'photo_id',
        'title',
        'content'
    ];

    //User relationship
    public function user() {
        return $this->belongsTo('App\User');
    }

    //Photo relationship
    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    //Category relationship
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
