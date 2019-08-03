<?php


namespace Project\Planet;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Event;

/**
*
*/
class ProjectProvider extends RouteServiceProvider
{
	/**
	 * The subscriber classes to register.
	 *
	 * @var array
	 */
	protected $subscribe = [];

	public function boot()
	{

	    parent::boot();

	    // laravel view symlink
	   $viewTarget = realpath(__dir__.'/../views');

	   $viewLink = base_path('resources/views/project/planet');

	   if (!is_link($viewLink)) {
	       symlink($viewTarget, $viewLink);
	   }

	   // dist symlink to assets
	   $target = realpath(__dir__ . '/..') . '/dist';

	   $link = public_path('assets/planet');

	   if (!is_link($link)) {
	   	symlink($target, $link);
	   }
	//    app('router')->aliasMiddleware('birthday', Middleware\Birthday::class);

		 $this->publishMigration();

			// $this->schedule();
	}

	public function publishMigration(){
		// Publish migrations
		$migrations = realpath(__DIR__.'/../database/migrations');

		$this->publishes([
		    $migrations => $this->app->databasePath().'/migrations',
		], 'migrations');

	}

	public function register()
	{
		$this->commands([
			// Commands\ShopCommand::class,
			// Commands\UserCommand::class
		]);
	}


	/**
     * Maps router.
     * Add package special controllers.
     *
     * @param Router $route Router.
     */
    public function map()
    {
        dd(1);
		Route::middleware(['web'])
		->namespace('Project\Planet\Controllers')
		->group(realpath(__dir__ . '/../routes/web.php'));
		// Route::middleware(['web'])
        //  ->namespace('Project\Planet\Controllers\Admin')
        //  ->group(realpath(__dir__ . '/../routes/admin.php'));
		//  Route::middleware(['web'])
        //   ->namespace('Project\Planet\Controllers\Admin')
        //   ->group(realpath(__dir__ . '/../routes/admin2.php'));
		//  Route::middleware(['web'])
		//  ->namespace('Project\Planet\Controllers\Api')
		//  ->group(realpath(__dir__ . '/../routes/api.php'));
    }

		/**
		 * Get the events and handlers.
		 *
		 * @return array
		 */
		public function listens()
		{
				// return $this->listen;
		}
}
