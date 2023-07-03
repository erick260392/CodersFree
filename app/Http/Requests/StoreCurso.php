<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'debe de ingresar un nombre al curso',
            'name.max' => 'el maximo de caracteres permitidos es 10',
            'description.required' => 'Debe ingresar una descripcion del Curso',
            'description.min' => 'el minimo de caracteres permitidos son 10',
            'categoria' => 'debe de ingresar una categoria para el curso'
        ];
    }
}
