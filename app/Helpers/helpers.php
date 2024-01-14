<?php

use App\Models\webSetup;
use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('websetup')) {
    function websetup()
    {
        return $websetting = webSetup::first();
    }
}


if (!function_exists('ShareWidget')) {
    function ShareWidget()
    {
        $websetting = websetup();
        $shareButtons = Share::page(
            config('app.url'),
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp();

        return  $shareButtons;
    }
}
