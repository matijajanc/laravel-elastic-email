# Laravel Elastic Email #

A Laravel wrapper for Elastic Email

### Installation ###

Add Laravel Elastic Email as a dependency using the composer CLI:

```bash
composer require chocoholics/laravel-elastic-email
```

Next, add the following to your config/services.php and add the correct values to your .env file
```php
'elasticemail' => [
	'key' => env('ELASTIC_KEY'),
	'account' => env('ELASTIC_ACCOUNT')
]
```

and this to your config/mail.php under mailers
```php
'elasticemail' => [
    'transport' => 'elasticemail',
]
```

Next, in config/app.php, comment out Laravel's default MailServiceProvider. If using < Laravel 5.5, add the MailServiceProvider to the providers array
```php
'providers' => [
    /*
     * Laravel Framework Service Providers...
     */
    ...
//    Illuminate\Mail\MailServiceProvider::class,
    Chocoholics\LaravelElasticEmail\MailServiceProvider::class,
    ...
],
```

Finally switch your default mail provider to elastic email in your .env file by setting MAIL_MAILER=elasticemail

### Usage ###

This package works exactly like Laravel's native mailers. Refer to Laravel's Mail documentation.
