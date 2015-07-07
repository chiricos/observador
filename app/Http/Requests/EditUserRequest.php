<?php namespace baibai\Http\Requests;

use baibai\Http\Requests\Request;

class EditUserRequest extends Request {

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
            'identification'        =>  'required|unique:users,identification,'.$this->route()->getParameter('id'),
            'user_name'             =>  'required|unique:users,user_name,'.$this->route()->getParameter('id'),
            'name'                  =>  'required',
            'second_name'           =>  'required',
            'last_name'             =>  'required',
            'second_last_name'      =>  'required',
            'email'                 =>  'required|unique:users,email,'.$this->route()->getParameter('id'),
            'mobile_phone'          =>  'required|numeric|digits_between:7,10',
            'phone'                 =>  'required|numeric|digits_between:7,10',
            'role_id'               =>  'required'
		];
	}

}
