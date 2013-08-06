<?php

namespace spec\Lms42\Propel\Ownerable;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Lms42\Propel\Ownerable\AbstractQuery;

class AbstractQuerySpec extends ObjectBehavior
{
    
    function it_is_initializable()
    {
        $this->shouldHaveType('Lms42\Propel\Ownerable\AbstractQuery');
    }
    
}
