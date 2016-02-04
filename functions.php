<?php

function trim_excerpt($text) {
    return rtrim($text,'&hellip;');
}

add_filter('get_the_excerpt', 'trim_excerpt');
