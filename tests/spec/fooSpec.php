<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class fooSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\foo');
    }

    function has_collection()
    {
        $this->shouldHaveItems();
    }
}
