<?php

namespace humhub\modules\followallspacecontent;

use Yii;

class Events
{
    public static function onSpaceMemberAdded($event)
    {
	Yii::$app->notification->setSpaceSetting($event->user, $event->space, true); 
    }
}

