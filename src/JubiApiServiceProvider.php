<?php namespace Wlkj\JubiApi;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class JubiApiServiceProvider extends ServiceProvider {

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		
	}

	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{        
        $this->app['JubiApi'] = new \Wlkj\JubiApi\JubiApi();
	}

}
