<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => 'required|string|min:3',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
        ];
    }
    public function message(): array
    {
        return [

            'name.required' => 'Ad və soyad min 3 hərfdən ibarət olmalıdır, boş buraxıla bilməz',
            'email.required' => 'Email boş buraxıla bilməz',
            'subject.required' => 'Mövzu boş buraxıla bilməz',
            'message.required' => 'Mesaj boş buraxıla bilməz'

        ];
    }
}
