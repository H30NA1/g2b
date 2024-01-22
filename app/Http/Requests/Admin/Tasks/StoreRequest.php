<?php

namespace App\Http\Requests\Api\Tasks;

use App\Rules\Admin\CheckEmailExists;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [

        ] ;
    }

    public function messages()
    {
        return [];
    }

    public function attributes()
    {
        $attributes = [];
        return $attributes;
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors(); // Here is your array of errors

        $response = response()->json([
            'message' => 'Invalid data send',
            'details' => $errors->messages()
        ], 422);

        throw new HttpResponseException($response);
    }
}
