<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => ['required', 'min:10'],
            'price' => ['required'],
            'series' => ['required', 'min:5'],
            'sale_date' => ['required'],
            'type' => ['required', 'min:5'],
        ];
    }

    public function messages()
    {
        return [
            // titolo
            'title.required' => 'Il titolo deve essere inserito',
            // prezzo
            'price.required' => 'Il prezzo deve essere inserito',
            // serie
            'series.required' => 'La serie deve essere inserita',
            // data pub.
            'sale_date.required' => 'La data di pubblicazione  deve essere inserita',
            // tipo
            'type.required' => 'Il tipo deve essere inserito',
        ];
    }
}
