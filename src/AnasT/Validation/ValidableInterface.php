<?php namespace AnasT\Validation;

interface ValidableInterface {

    /**
     * Pass the data to the validator.
     *
     * @param array $input
     * @return self
     */
    public function with(array $input);

    /**
     * Determine if the data passes the validation rules.
     *
     * @return boolean
     */
    public function passes();

    /**
     * Return the errors.
     *
     * @return Illuminate\Support\MessageBag
     */
    public function errors();

}