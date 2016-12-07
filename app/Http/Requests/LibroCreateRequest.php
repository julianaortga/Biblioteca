<?php

namespace Biblioteca\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Biblioteca\Http\Requests\Request;

class LibroCreateRequest extends FormRequest
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
             
            'titulo' => 'required|unique:libro',
            'area' => 'required',
            'grado' => 'required',
        ];
    }
}
