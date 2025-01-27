<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required|string|min:3',
            'description' => 'required',
        ];
    }

    /* public function messages(): array
    {
        return [
            'title.required' => 'Ad Soyad boş buraxıla bilməz.',
            'title.string' => 'Ad Soyad yanlız hərflərdən ibarət olmaıdır.',
            'title.min' => ' Ad Soyad minimum 3 hərfdən ibarət olmalıdır.',
            'description.required' => 'Description boş buraxıla bilməz.'
        ];
    } */
}
