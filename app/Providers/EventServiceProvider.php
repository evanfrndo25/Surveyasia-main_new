<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            //auto send email verification after register
            SendEmailVerificationNotification::class,
        ],
        // \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        //     \SocialiteProviders\Google\GoogleExtendSocialite::class . '@handle',
        //     \SocialiteProviders\Facebook\GoogleExtendSocialite::class . '@handle',
        //     \SocialiteProviders\linkedin\GoogleExtendSocialite::class . '@handle',
        // ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
