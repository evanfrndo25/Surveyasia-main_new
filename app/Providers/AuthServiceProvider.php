<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        //send link for verification
        // VerifyEmail::toMailUsing(function ($notifiable, $url) {

        //     return (new MailMessage)
        //         ->subject('SurveyAsia Account Activation')
        //         ->line('Thank you for registering')
        //         ->line('Click the button below to verify your account and start using our services')
        //         ->action('Verify Now', $url)
        //         ->line('*not you ?, just ignore this message and secure your email account');
        // });

        //send otp instead of link for verification
        /* VerifyEmail::toMailUsing(function ($notifiable, $url) {

            return (new MailMessage)
                ->subject('Your OTP for SurveyAsia Account Activation')
                ->line('the information below is your OTP for verifying email to use our services')
                ->action('Verify Now', $url)
                ->line('*not you ?, just ignore this message and secure your email account');
        }); */
    }
}
