<?php namespace baibai\Http\Requests;

use baibai\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'identification'        =>  'required|unique:users',
            'username'              =>  'required|unique:users',
            'name'                  =>  'required',
            'second_name'           =>  'required',
            'last_name'             =>  'required',
            'second_last_name'      =>  'required',
            'email'                 =>  'required|email|unique:users',
            'password'              =>  'required',
            'confirmation_password' =>  'required|same:password',
            'mobile_phone'          =>  'required|numeric|digits_between:7,10',
            'phone'                 =>  'required|numeric|digits_between:7,10',
            'role_id'               =>  'required',
            'photo'                 =>  'file'

		];
	}

    public function messages()
    {
        return[
            'username.required'     => 'El campo username es requerido!',
            'required'              => 'El campo es requerido',
            'unique'                => 'El campo ya se encuentra registrado',
            'numeric'               => 'El campo tiene que ir en numeros',
            'digits_between'        => 'El campo esta muy corto o muy largo',
            'email'                 => 'El campo debe ir con el formatio de correo',
            'image'                 => 'El archivo debe ser una imagen',
            'date'                  => 'El campo va en formato de Fecha dd-mm-aa',
            'same'                  => 'Las contraseñas deben ser iguales'
        ];
    }
}
