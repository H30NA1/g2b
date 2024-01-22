<?php

namespace App\Rules\Admin;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckAuthId implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $column = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($column, $value)->first();

        if (!isset($user)) {
            $fail("The {$column} '{$value}' does not exist.");
        }
        
        if (isset($user) && isset($user->settings)) {
            if ($user->settings->status == 0 && $user->settings->is_blocked == 1) {
                $fail("The {$column} '{$value}' is blocked.");
            }

            if ($user->settings->status == 2) {
                $fail("The {$column} '{$value}' is suspended for checking.");
            }
        }
    }
}
