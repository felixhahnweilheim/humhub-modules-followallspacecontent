<?php

namespace humhub\modules\followallspacecontent;

use Yii;
use humhub\modules\space\models\Membership;

class Events
{
    /*
     * Callback on user joining a space
     *
     * Switch on the space notifications when a user is added to a space (after invitation, request or direct adding)
     * since HumHub v1.13.1 the event is also called for the space creator
     *
     * @param MemberEvent $event
    */
    public static function onSpaceMemberAdded($event)
    {
        Yii::$app->notification->setSpaceSetting($event->user, $event->space, true);
    }
}
