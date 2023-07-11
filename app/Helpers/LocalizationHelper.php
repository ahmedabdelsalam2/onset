<?php

if (! function_exists('appDir')) {
    function appDir() :string
    {
        return app()->getLocale() == 'en' ? 'ltr' : 'rtl';
    }
}




