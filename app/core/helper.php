<?php

namespace mvc\core;

class helper
{
    static function redirect($path)
    {
        header("LOCATION:" . url . $path);
    }
}
