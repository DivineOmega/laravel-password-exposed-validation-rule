<?php

namespace DivineOmega\LaravelPasswordExposedValidationRule;

use DivineOmega\PasswordExposed\PasswordExposedChecker;
use DivineOmega\PasswordExposed\PasswordStatus;
use Illuminate\Contracts\Validation\Rule;

class PasswordExposed implements Rule
{
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
        $passwordStatus = (new PasswordExposedChecker())->passwordExposed($value);

        if ($passwordStatus === PasswordStatus::EXPOSED) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute has been exposed in a data breach.';
    }
}
