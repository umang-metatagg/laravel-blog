<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamp = true;
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
