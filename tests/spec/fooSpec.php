<?php namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FooSpec extends ObjectBehavior
{
    public function itIsInitializable()
    {
        $this->shouldHaveType('App\foo');
    }

    public function hasCollection()
    {
        $this->shouldHaveItems();
    }
}
