<?php

function profile()
{
    $setting = App\Models\Setting::find(1);

    return $setting;
}

?>