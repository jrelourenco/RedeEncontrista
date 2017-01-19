<?php

namespace App\Model;

use App\DefaultModel;


class Encontrista extends DefaultModel
{
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'password',
        'remember_token',
    ];


}
