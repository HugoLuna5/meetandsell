<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ComercialSubsections extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commercial_subsections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['commercial_subsection', 'commercial_section'];
	//
}
