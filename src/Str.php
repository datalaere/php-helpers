<?php

namespace PHP\Types;

class Str
{
    public static function escape($string)
    {
        return trim(filter_var($string, FILTER_SANITIZE_STRING));
    }

    public static function strip($string, $tags = '')
    {
        return strip_tags($string, $tags);
    }

    public static function serialize($input)
    {
        return serialize($input);
    }

    public static function unserialize($input)
    {
        return userialize($input);
    }

    public static function jsonEncode($input)
    {
        return json_encode($input);
    }

    public static function jsonDecode($json)
    {
        return json_decode($json);
    }

    // This function expects the input to be UTF-8 encoded.
    public static function toSlug($string, $replace = array(), $delimiter = '-')
    {
        if (!empty($replace)) {
            $string = str_replace((array) $replace, ' ', $string);
        }

        return preg_replace('/[^A-Za-z0-9-]+/', $delimiter, $string);
    }

}
