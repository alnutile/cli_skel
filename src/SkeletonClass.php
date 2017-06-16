<?php

namespace League\Skeleton;

class SkeletonClass
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    public function echoPhrase($name, $message)
    {
        return sprintf("Hello %s, %s", $name, $message);
    }
}
