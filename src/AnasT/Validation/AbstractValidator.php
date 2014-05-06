<?php namespace AnasT\Validation;

abstract class AbstractValidator implements ValidableInterface {

    /**
     * Data to be validated.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Validation Rules.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Validation Errors.
     *
     * @var mixed
     */
    protected $errors;

    /**
     * Set data to validate.
     *
     * @param array $input
     * @return self
     */
    public function with(array $input)
    {
        $this->data = $input;
        return $this;
    }

    /**
     * Pass the data and the rules to the validator.
     *
     * @return boolean
     */
    abstract function passes();

    /**
     * Return the errors.
     *
     * @return mixed
     */
    public function errors()
    {
        return $this->errors;
    }

}