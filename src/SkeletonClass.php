<?php

namespace Alnutile\Skeleton;

class SkeletonClass extends Application
{

    public function echoPhrase($name, $message)
    {
        return sprintf("Hello %s, %s", $name, $message);
    }
}
