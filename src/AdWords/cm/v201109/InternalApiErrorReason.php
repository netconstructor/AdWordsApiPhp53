<?php

namespace AdWords\cm\v201109;



class InternalApiErrorReason
{
    /**
     * API encountered an unexpected internal error.
     */
    const CHOICE_UNEXPECTED_INTERNAL_API_ERROR = 'UNEXPECTED_INTERNAL_API_ERROR';
    /**
     * The cause of the error is not known or only defined in newer versions.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'UNEXPECTED_INTERNAL_API_ERROR',
        'UNKNOWN',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}