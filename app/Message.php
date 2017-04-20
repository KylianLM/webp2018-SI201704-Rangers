<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'body',
        'phone',
        'body',
        'callback',
        'label',
        'time'
    ];

    protected $dates = [
      'created_at'
    ];
}
