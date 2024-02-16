<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckEmailExists implements ValidationRule
{
    private $userId;

    public function __construct($userId = NULL)
    {
        $this->userId = $userId;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (isset($this->userId)) {
            $user = User::find($this->userId);
            if (isset($user) && $user->email != $value) {
                $user = User::where('email', $value)->whereHas('settings', function ($q) use ($value) {
                    return $q->where('status', 1)->where('is_blocked', 0);
                })->first();
    
                if (isset($user)) {
                    $fail("The '{$value}' is already exist.");
                }
            }
        } else {
            $user = User::where('email', $value)->whereHas('settings', function ($q) use ($value) {
                return $q->where('status', 1)->where('is_blocked', 0);
            })->first();

            if (isset($user)) {
                $fail("The '{$value}' is already exist.");
            }
        }
    }
}
