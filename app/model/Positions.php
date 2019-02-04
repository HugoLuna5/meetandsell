<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['position', 'value'];
	//
}
