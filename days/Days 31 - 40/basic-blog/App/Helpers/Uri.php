<?php

namespace App\Helpers;

class Uri
{
    /**
     * @return string The Uri path ignoring path variables.
     * @example: A complete URI - https://www.example.com/test/123?page=1 - will return simply its path - /test/123/.
     */
    public static function uri(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
