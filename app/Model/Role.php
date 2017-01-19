<?php

namespace App\Model;


use App\DefaultModel;
use Illuminate\Support\Facades\DB;


class Role extends DefaultModel
{


    protected $appends = [
        'role',
    ];


    public function getRoleAttribute()
    {
        return DB::table('role_types')->find($this->role_id)->name;
    }


}
