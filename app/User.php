<?php namespace baibai;

use baibai\baibai\Components\ACL\ACL;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->second_name.' '.$this->last_name.' '.$this->second_last_name;
    }

    public function getTypeAttribute()
    {
        if($this->role_id==1)
        {
            return "Super Administrador";
        }
        if($this->role_id==2){
            return "Administrador";
        }

        if($this->role_id==3){
            return "Tecnico";
        }
        if($this->role_id==4){
            return "Cliente";
        }
    }



}
