<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'images' => 'json',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'images', 'directory'
    ];
}
