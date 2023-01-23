<?php

use yii\base\Event;
use humhub\modules\followallspacecontent\Events;
use humhub\modules\space\models\Membership;

return [
    'id' => 'followallspacecontent',
    'class' => 'humhub\modules\followallspacecontent\Module',
    'namespace' => 'humhub\modules\followallspacecontent',
    'events' => [
        [
            'class' => Membership::class,
            'event' => Membership::EVENT_MEMBER_ADDED,
            'callback' => [Events::class, 'onSpaceMemberAdded']
        ]
    ]
];
