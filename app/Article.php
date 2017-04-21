<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img',
        'body',
        'title',
        'visible'
    ];

    protected $dates = [
        'created_at'
    ];
}
