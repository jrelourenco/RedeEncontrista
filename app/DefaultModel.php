<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DefaultModel extends Model
{
    use SoftDeletes;

    protected $casts = [
        'deleted_at' => 'date',
        'creation_date' => 'date',
        'inactivation_date' => 'date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
