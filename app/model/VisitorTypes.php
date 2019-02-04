<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class VisitorTypes extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'visitor_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];
}
