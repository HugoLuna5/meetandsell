<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nationalities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nationality'];
	//
}
