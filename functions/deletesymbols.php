<?php

function deletesymbols(string $filename) : string
{
    $pattern = '/[\W]/';

    $info = pathinfo($filename);
    $name = $info['filename'];
    $extansion = $info['extension'];
    $filename = preg_replace($pattern, '', $filename);
    return $name.".".$extansion;
}
