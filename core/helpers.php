<?php

function render($template)
{
    ob_start();
    include($template);
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}
