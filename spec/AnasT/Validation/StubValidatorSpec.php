<?php

namespace spec\AnasT\Validation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StubValidatorSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('AnasT\Validation\StubValidator');
    }

    function it_extends_laravel_validator()
    {
        $this->shouldHaveType('AnasT\Validation\LaravelValidator');
    }

    // function it_validates_given_data_against_rules()
    // {
    //     $validData = [
    //         'email' => 'test@email.com',
    //         'name' => 'John Doe',
    //         'age' => 24
    //     ];

    //     $invalidData = [
    //         'email' => 'nimp',
    //         'name' => '124 Some Random-^ Invalid _Data#',
    //         'age' => 'Not A Number | Not > 0'
    //     ];
    //     $this->with($validData)->passes()->shouldReturn(true);
    //     $this->with($invalidData)->passes()->shouldReturn(false);
    // }

    // function it_returns_validation_errors()
    // {
    //     $data = [];

    //     if(! $this->with($data)->passes())
    //         $this->errors()->shouldContain('Something');
    // }

}
