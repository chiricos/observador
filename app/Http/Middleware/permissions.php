<?php namespace baibai\Http\Middleware;

use baibai\baibai\Components\ACL\ACL;
use Closure;
use Illuminate\Auth\Guard;
use Illuminate\Routing\Route;

class permissions {

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        $currAction=$request->route()->getAction();
        $currAction=$currAction['permission'];
        if($this->auth->user())
        {
            $id=$this->auth->user()->id;
            $permissions=ACL::getPermissionsAll($id);
            if(! ACL::check($currAction))
            {

                $this->auth->logout();
                 return redirect()->to('/');
            }
        }



		return $next($request);
	}

}
