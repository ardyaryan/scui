<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TEST extends Model
{

    protected $table      = 'test';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at', 'deleted_at'];

}
