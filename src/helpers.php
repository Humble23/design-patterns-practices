<?php

if (!function_exists('slugify')) {
    function slugify($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^\w]+/', '-', $text);
        $text = trim($text, '-');
        
        return $text;
    }
}