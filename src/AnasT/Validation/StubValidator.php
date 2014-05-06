<?php namespace AnasT\Validation;

class StubValidator extends LaravelValidator {

    /**
     * Validation rules.
     *
     * @var array
     */
    protected $rules = [
        'email' => 'email|required',
        'name' => 'alpha|max:30',
        'age' => 'number|min:1'
    ];

}
