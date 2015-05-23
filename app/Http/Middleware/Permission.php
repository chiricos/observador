<?php namespace baibai\Http\Middleware;


use Closure;
use baibai\baibai\Components\ACL\ACL;

class Permission {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$action = $request->route()->getAction();
		$permission = $action['permission'];
	    ACL::getPermissionsAll(1);
		if (!ACL::check($permission))
		{
			return redirect('usuario/20');
		}
		return $next($request);
	}

}
