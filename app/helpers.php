<?php

function profile()
{
    $setting = App\Models\Setting::find(1);

    return $setting;
}

function about()
{
    $about = App\Models\AboutUs::find(1);

    return $about;
}

?>