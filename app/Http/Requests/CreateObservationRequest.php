<?php namespace baibai\Http\Requests;

use baibai\Http\Requests\Request;

class CreateObservationRequest extends Request {

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
            'user_id'               =>  'numeric',
            'observacion'           =>  'required'

        ];
    }

    /* public function messages()
     {
         return[
             'identification.required'       => 'El campo cedula es requerido!',
             'username.required'             => 'El campo username es requerido!',
             'name.required'                 => 'El campo nombre es requerido!',
             'second_name.required'          => 'El campo segundo nombre es requerido!',
             'last_name.required'            => 'El campo apellido es requerido!',
             'second_last_name.required'     => 'El campo segundo apellido es requerido!',
             'email.required'                => 'El campo correo es requerido!',
             'password.required'             => 'El campo contraseña es requerido!',
             'confirmation_password.required'=> 'El campo confirmar contraseña es requerido!',
             'mobile_phone.required'         => 'El campo celular es requerido!',
             'phone.required'                => 'El campo telefono es requerido!',
             'role_id.required'              => 'El campo tipo de cuenta es requerido!',
             'photo.required'                => 'El campo foto es requerido!',
             'unique'                        => 'El campo ya se encuentra registrado',
             'numeric'                       => 'El campo tiene que ir en numeros',
             'digits_between'                => 'El campo esta muy corto o muy largo',
             'email'                         => 'El campo debe ir con el formatio de correo',
             'image'                         => 'El archivo debe ser una imagen',
             'date'                          => 'El campo va en formato de Fecha dd-mm-aa',
             'same'                          => 'Las contraseñas deben ser iguales'
         ];
     }*/
}
