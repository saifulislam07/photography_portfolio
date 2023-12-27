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
