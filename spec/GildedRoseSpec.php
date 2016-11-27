<?php

namespace spec\App;


use App\GildedRose;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GildedRoseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('normal',10,5);
        $this->shouldHaveType(GildedRose::class);
    }
}
