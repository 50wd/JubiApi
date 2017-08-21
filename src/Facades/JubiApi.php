<?php namespace Wlkj\JubiApi\Facades;

use Illuminate\Support\Facades\Facade;

class JubiApi extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'JubiApi';
	}
}
