<?php

namespace League\Skeleton;

class SkeletonClassTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {

        $name = "foo";
        $message = "Bar";

        /** @var SkeletonClass $skel */
        $skel = $this->app->getContainer()['skel'];

        $results = $skel->echoPhrase($name, $message);

        $this->assertEquals("Hello foo, Bar", $results);
    }
}
