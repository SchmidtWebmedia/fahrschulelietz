<?php

namespace MarcoSchmidtWebmedia\Schmidtwebmedia\TypoScript;

class ConditionFunctionProvider
{
    public function isDisabled($cookieName) : bool {
        $doNotTrack = (bool) $_SERVER['HTTP_DNT'] ?? false;
        $cookieIsSet = (bool)$_COOKIE[$cookieName] ?? false;
        return $doNotTrack || $cookieIsSet;
    }
}
