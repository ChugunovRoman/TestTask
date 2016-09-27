<?php
function arrayGet(array $haystack, $needle, $default = null)
{    
    if(array_key_exists($needle, $haystack)) {
        return $haystack[$needle];
    }

    foreach(explode('.', $needle) as $key) {
        if(is_array($haystack) && array_key_exists($key, $haystack))
            $haystack = $haystack[$key];
        else
            return $default;
    }

    return $haystack;
}
