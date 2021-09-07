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
}