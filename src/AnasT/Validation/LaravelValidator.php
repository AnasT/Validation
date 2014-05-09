<?php namespace AnasT\Validation;

abstract class LaravelValidator extends AbstractValidator {

    /**
     * Laravel application.
     *
     * @var Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Validator instance.
     *
     * @var Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * Create a new laravel validator instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->app = app();
        $this->validator = $this->app['validator'];
    }

    /**
     * Pass the data and the rules to the validator.
     *
     * @return boolean
     */
    public function passes()
    {
        $validator = $this->validator->make($this->data, $this->rules);

        if($validator->passes())
        {
            return true;
        }

        $this->errors = $validator->errors()->all(':message');
        return false;
    }

}
