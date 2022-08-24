<?php

namespace alr\core;

class Request
{
    public static function get_method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}