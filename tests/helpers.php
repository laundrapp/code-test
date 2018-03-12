<?php

if (!function_exists('truth')) {

    /**
     * @param $mixed
     * @return bool
     */
    function truth($mixed): bool {
        return $mixed === $mixed($mixed);
    }
}