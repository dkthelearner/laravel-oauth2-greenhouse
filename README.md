

# krdinesh/laravel-oauth2-greenhouse

krdinesh/laravel-oauth2-greenhouse is a [Laravel 5.2](https://laravel.com/) service provider for [krdinesh/oauth2-greenhouse](https://github.com/krdinesh/oauth2-greenhouse).

## Installation

The preferred method of installation is via [Packagist][] and [Composer][]. Run
the following command to install the package and add it as a requirement to
your project's `composer.json`:

```bash
composer require krdinesh/laravel-oauth2-greenhouse
```

After requiring the package with Composer, you'll need to add the following to the `providers` array in `config/app.php`:

``` php
Krdinesh\Laravel\OAuth2\Greenhouse\GreenhouseServiceProvider::class
```

Then, add the following to the `aliases` array in the same file:

``` php
'Greenhouse' => Krdinesh\Laravel\OAuth2\Greenhouse\Facades\Greenhouse::class
```

Now, run the following to properly set up the package with your Laravel application:

``` bash
php artisan vendor:publish
```

Finally, Add your client ID, client secret, and redirect URI to `config/greenhouse.php`.


## Examples

Create an authorization URL and redirect users to it in order to request access to their Greenhouse account:

``` php
$authUrl = Greenhouse::authorize([], function ($url, $provider) use ($request) {
    $request->session()->put('greenhouseState', $provider->getState());
    return $url;
});

return redirect()->away($authUrl);
```

In the route for the redirect URI, check the state and authorization code, and use the code to get an access token. Store the token to the session or to the user's profile in your data store.

``` php
if (!$request->has('state') || $request->state !== $request->session()->get('greenhouseState')) {
    abort(400, 'Invalid state');
}

if (!$request->has('code')) {
    abort(400, 'Authorization code not available');
}

$token = Greenhouse::getAccessToken('authorization_code', [
    'code' => $request->code,
]);

$token->getToken();
```

## Copyright and License

The krdinesh/laravel-oauth2-greenhouse library is copyright ©[Dinesh kumar](https://github.com/krdinesh) and licensed for use under the MIT License (MIT). Please see [LICENSE][] for more information.


[source]: https://github.com/krdinesh/laravel-oauth2-greenhouse
[packagist]: https://packagist.org/packages/krdinesh/laravel-oauth2-greenhouse
[composer]: http://getcomposer.org/
[license]: https://github.com/krdinesh/laravel-oauth2-greenhouse/blob/master/LICENSE
