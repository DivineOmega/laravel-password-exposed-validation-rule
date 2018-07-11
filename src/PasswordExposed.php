<?php

namespace DivineOmega\LaravelPasswordExposedValidationRule;

use DivineOmega\PasswordExposed\PasswordExposedChecker;
use DivineOmega\PasswordExposed\PasswordStatus;
use Illuminate\Contracts\Validation\Rule;

class PasswordExposed implements Rule
{
    private $passwordExposedChecker;
    private $message = 'The :attribute has been exposed in a data breach.';

    public function __construct(PasswordExposedChecker $passwordExposedChecker = null)
    {
        if (!$passwordExposedChecker) {
            $passwordExposedChecker = new PasswordExposedChecker();
        }

        $this->passwordExposedChecker = $passwordExposedChecker;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $passwordStatus = $this->passwordExposedChecker->passwordExposed($value);

        return $passwordStatus !== PasswordStatus::EXPOSED;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * Set a custom validation error message.
     *
     * @param string $customMessage
     *
     * @return \DivineOmega\LaravelPasswordExposedValidationRule\PasswordExposed
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
