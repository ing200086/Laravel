<?php namespace spec\App;

use PhpSpec\ObjectBehavior;

class fooSpec extends ObjectBehavior
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
