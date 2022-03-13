<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        /**
         * limiting user for certain amount of allowed API request
         * using email if logged in or ip address
         */
        RateLimiter::for('api', function (Request $request) {
            $limit = $request->user()
                ? Limit::perMinute(10)->by($request->user()->email)
                : Limit::perMinute(10)->by($request->ip());

            if ($limit) {
                // log any request that exceed limit
                Log::build(
                    [
                        'driver' => 'single',
                        'path' => storage_path('logs/throttler.log')
                    ]
                )->info(
                    'API Throttled',
                    [
                        'client_id' => $request->user() ? $request->user()->id : 'guest/unknown',
                        'client_ip' => $request->ip(),
                        'date' => now()
                    ]
                );
            }
            return;
        });

        /**
         * Define rate limiter for user login, currently 4 attempts per 5 minutes
         * using email if logged in or ip address 
         */
        RateLimiter::for('login', function (Request $request) {
            $limit = $request->user()
                ? Limit::perMinutes(5, 4)->by($request->user()->email)
                : Limit::perMinutes(5, 4)->by($request->ip());

            if ($limit) {
                // log any request that exceed limit
                Log::build(
                    [
                        'driver' => 'single',
                        'path' => storage_path('logs/throttler.log')
                    ]
                )->info(
                    'Login Throttled',
                    [
                        'client_id' => $request->user() ? $request->user()->id : 'guest/unknown',
                        'client_ip' => $request->ip(),
                        'date' => now()
                    ]
                );
            }

            return $limit;
        });

        /**
         * Define rate limiter for admin login, currently 2 attempts per 10 minutes
         * using the same ip address as key
         */
        RateLimiter::for('admin-login', function (Request $request) {
            $limit = $request->user()
                ? Limit::perMinutes(10, 2)->by($request->user()->email)
                : Limit::perMinutes(10, 2)->by($request->ip());
            if ($limit) {
                // log any request that exceed limit
                Log::build(
                    [
                        'driver' => 'single',
                        'path' => storage_path('logs/throttler.log')
                    ]
                )->info(
                    'Login Throttled',
                    [
                        'client_id' => $request->user() ? $request->user()->id : 'guest/unknown',
                        'client_ip' => $request->ip(),
                        'date' => now()
                    ]
                );
            }
            return;
        });
    }
}
