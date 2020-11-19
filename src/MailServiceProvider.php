<?php

namespace Chocoholics\LaravelElasticEmail;

use Illuminate\Mail\MailServiceProvider as LaravelMailServiceProvider;

class MailServiceProvider extends LaravelMailServiceProvider
{
	/**
     * Register the Mail Manager instance.
     *
     * @return void
     */
    protected function registerIlluminateMailer()
    {
        $this->app->singleton('mail.manager', function ($app) {
		    return new TransportManager($app);
	    });
    }
}
