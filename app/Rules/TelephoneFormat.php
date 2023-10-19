<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TelephoneFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         // Define your custom validation logic here
         $isValidFormat = preg_match('/^[\d\s()+-]+$/', $value); 

         if (!$isValidFormat) {
             $fail('Le numero de Téléphone est invalide.');
         }
    }
}
