<?php

namespace App;

use App\Model\MeetingType;
use DateTime;


class Meeting extends DefaultModel
{


    public function meetingType()
    {
        $this->hasMany(MeetingType::class);
    }
}
