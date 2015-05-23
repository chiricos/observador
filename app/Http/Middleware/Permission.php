<?php namespace baibai\Http\Middleware;


use Closure;
use baibai\baibai\Components\ACL\ACLBuilder;

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
	     ACLBuilder::getPermissionAll(1);
		if (!ACLBuilder::check('prueba'))
		{
			return redirect('usuario/20');
		}
		return $next($request);
	}

}
