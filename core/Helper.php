<?php

class Helper
{
    public static function render($template): string
    {
        ob_start();
        include($template);
        $ret = ob_get_contents();
        ob_end_clean();
        return $ret;
    }

    public static function url(string $uri): string
    {
        $host = APP_HOST;
        $port = APP_PORT;
        $context_path = APP_CONTEXT_PATH;
        return empty($context_path)
            ? "http://$host:$port/$uri"
            : "http://$host:$port/$context_path/$uri";
    }

    public static function assets(string $uri): string
    {
        return self::url("assets/$uri");
    }
}