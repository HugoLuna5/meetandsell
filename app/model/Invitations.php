<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Invitations extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invitations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['acepted_1', 'acepted_2', 'user_1', 'user_2', 'conference', 'message'];
	//
}
