<?php

namespace humhub\modules\followallspacecontent;

use Yii;
use humhub\modules\space\models\Membership;

class Events
{
    /*
     * Callback on user joining a space

     Callback on user joining a space
     *
     * Switch on the space notifications when a user is added to a space (after invitation, request or direct adding)
     *
     * @param MemberEvent $event
    */
    public static function onSpaceMemberAdded($event)
    {
        Yii::$app->notification->setSpaceSetting($event->user, $event->space, true);
    }

    /*
     * Callback on class level event of ActiveRecord
     *
     * Switch on the space notifications for creator of the space
     *
     * @param AfterSaveEvent $event
     */
    public static function onSpaceEvent($event)
    {
        $current = $event->sender;

        // Check if a space was created
        if($current::class == \humhub\modules\space\models\Membership::class && $current->user_id !== null && $current->user_id === $current->created_by) {
	    Yii::$app->notification->setSpaceSetting($current->user, $current->space, true);
        }
    }
}
