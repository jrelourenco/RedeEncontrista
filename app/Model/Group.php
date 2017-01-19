<?php

namespace App\Model;

use App\DefaultModel;
use App\TeamCoordinator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


/**
 * App\Model\Group
 *
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $designation
 * @property string $localization
 * @property \Carbon\Carbon $creation_date
 * @property \Carbon\Carbon $inactivation_date
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereDesignation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereLocalization($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereCreationDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Group whereInactivationDate($value)
 * @mixin \Eloquent
 */
class Group extends DefaultModel
{

    protected $appends = [
        'active',
        'team_coordinator',
        'members',
    ];

    public function getActiveAttribute()
    {
        return is_null($this->inactivation_date);
    }

    public function getTeamCoordinatorAttribute()
    {
        return DB::table('team_coordinators')->whereGroupId($this->id)->get(['pastoral_year','coordinator','secretary','treasurer']);

    }

    public function getMembersAttribute()
    {
        return DB::table('roles')->whereGroupId($this->id)->whereRoleId(1)->get(['encontrista_id']);

    }
}
