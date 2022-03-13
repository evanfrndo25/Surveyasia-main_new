<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        Mail::fake();

        Mail::assertNothingSent();

        //Mail::assertQueued(WelcomeNewUserMail::class);

        Mail::assertSent(WelcomeNewUserMail::class);
    }
}
