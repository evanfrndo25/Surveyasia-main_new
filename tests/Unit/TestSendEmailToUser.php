<?php

namespace Tests\Unit;

use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\TestCase;

class TestSendEmailToUser extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_mail()
    {
        Mail::fake();

        Mail::assertNothingSent();

        Mail::assertQueued();

        Mail::assertSent(WelcomeNewUserMail::class);
    }
}
