<?php

namespace Chocoholics\LaravelElasticEmail;

use Illuminate\Mail\MailManager;

class TransportManager extends MailManager
{
    protected function createElasticemailTransport()
    {
        $config = $this->app['config']->get('services.elasticemail', []);

        return new ElasticTransport(
            $this->guzzle($config),
            $config['key'],
            $config['account']
        );
    }
}
