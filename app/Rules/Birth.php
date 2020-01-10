<?php

namespace EVisaUK\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\carbon;

class Birth implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
   public function passes($attribute, $value)
{
    $year = Carbon::now()->format('Y') - 40;
    $getYear = explode('-', $value);
    return Carbon::createFromFormat('Y-m-d', $value) && $getYear[0] < $year;
}

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '*Umur Anda Kurang dari 40 Tahun' ;
    }
}
