<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Rounds extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rounds';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['round', 'daty', 'time'];
}
