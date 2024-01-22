<?php

namespace App\Http\Requests\Api\Users;

use App\Rules\Admin\CheckEmailExists;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRequest extends FormRequest
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
        $extra = [];
        $this->generateRuleForProfessional($extra);
        $this->generateRuleForProfile($extra);
        $this->generateRuleForSocial($extra);

        $this->generateRuleForSettings($extra);

        return [
            'username' => 'required|min:6|max:50',
            'password' => 'required|min:6|max:50|confirmed',
            'email' => ['required','email','min:6','max:255', new CheckEmailExists($this->id)]
        ] + $extra;
    }

    public function messages()
    {
        return [];
    }

    public function attributes()
    {
        $attributes = [];
        $attributes['username'] = 'Username';
        $attributes['password'] = 'Password';
        $attributes['email'] = 'Email';
        $attributes['role'] = 'Role';
        $attributes['birthday'] = 'Birthday';
        $attributes['sex'] = 'Gender';
        $attributes['first_name'] = 'First Name';
        $attributes['last_name'] = 'Last Name';
        $attributes['address'] = 'User Address';
        $attributes['tel'] = 'User Tel';
        $attributes['description'] = 'User Description';
        $attributes['nationality'] = 'Nationality';
        $attributes['working_experiences'] = 'Working Experiences';
        $attributes['job_title'] = 'Job Title';
        $attributes['company_tel'] = 'Company Tel';
        $attributes['company_address'] = 'Company Address';
        $attributes['status'] = 'Status';
        $attributes['is_blocked'] = 'Is Blocked';
        $attributes['noti_email'] = 'Notify Email';
        $attributes['noti_device'] = 'Notify Device';
        $attributes['x_url'] = 'URL of X';
        $attributes['facebook_url'] = 'URL of Facebook';
        $attributes['instagram_url'] = 'URL of Instagram';
        $attributes['tiktok_url'] = 'URL of Tiktok';
        $attributes['youtube_url'] = 'URL of Youtube';


        return $attributes;
    }

    private function generateRuleForProfessional(&$extra)
    {
        $extra = [
            'working_experiences' => 'required|min:1|max:50',
            'job_title' => 'required|min:2|max:255',
            'company_address' => 'required|min:6|max:255',
            'company_tel' => 'required|min:10|max:11',
        ];
    }

    private function generateRuleForProfile(&$extra)
    {
        $extra = [
            'birthday' => 'nullable|date',
            'sex' => 'required|in:male,female,other',
            'first_name' => 'nullable|min:3|max:255',
            'last_name' => 'nullable|min:3|max:255',
            'nationality' => 'nullable|min:6|max:255',
            'address' => 'nullable|min:6|max:255',
            'tel' => 'required|min:10|max:11',
            'description' => 'nullable|min:10|max:1000',
        ] + $extra;
    }

    private function generateRuleForSocial(&$extra)
    {
        $extra = [
            'x_url' => 'nullable|min:10|max:255',
            'facebook_url' => 'nullable|min:10|max:255',
            'instagram_url' => 'nullable|min:10|max:255',
            'tiktok_url' => 'nullable|min:10|max:255',
            'youtube_url' => 'nullable|min:10|max:255',
        ] + $extra;
    }

    private function generateRuleForSettings(&$extra)
    {
        $extra = [
            'role' => 'required|in:admin,employee,freelancer',
            'status' => 'required|in:0,1,2',
            'is_blocked' => 'required|in:0,1',
            'noti_email' => 'required|in:0,1',
            'noti_device' => 'required|in:0,1'
        ] + $extra;
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
