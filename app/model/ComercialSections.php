<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ComercialSections extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commercial_sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['commercial_section'];
	//
}
