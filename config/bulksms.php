<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'bulk_sms_nigeria' => [
        'token' => env('BULK_SMS_NIGERIA_TOKEN'),
        'dnd' => env('BULK_SMS_NIGERIA_DND', 2),
    ]
];
