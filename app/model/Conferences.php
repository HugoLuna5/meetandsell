<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Conferences extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['conference', 'round'];
	//
}
