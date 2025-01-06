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
            'message' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ad Soyad boş buraxıla bilməz.',
            'name.string' => 'Ad Soyad yanlız hərflərdən ibarət olmaıdır.',
            'name.min' => ' Ad Soyad minimum 3 hərfdən ibarət olmalıdır.',
            'email.required' => 'E-mail boş buraxıla bilməz.',
            'email.email' => 'Yanlış email forması.',
            'subject.required' => "Mövzu boş buraxıla bilməz",
            'message' => 'Mesaj boş buraxıla bilməz.'
        ];
    }
}
