<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:200', 'unique:projects'],
            'body' => ['nullable'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
            'category_id' => ['nullable',],
            'technologies' => ['nullable',],
        ];
    }
    public function messages()
    {
        return [
            'title.unique' => 'Il titolo deve essere univoco',
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare i :max caratteri',
            'image.url' => 'Il link immagine non è valido',
            'image.image' => 'L\'immagine deve essere un\'immagine',
            //'image.max' => 'L\'immagine deve essere massimo :max MB',
        ];
    }
}

