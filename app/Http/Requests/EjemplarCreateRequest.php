<?php

namespace Biblioteca\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjemplarCreateRequest extends FormRequest
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
            'cod_clasifiacion'=>'required|unique:ejemplar',
            'estado'=>'required',
            'estan'=>'required',
       ];
    }
}
