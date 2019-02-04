<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['street', 'outdoor_number', 'indoor_number', 'post_code', 'municipality', 'colony'];
}
