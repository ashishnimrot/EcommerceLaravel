# International shopping website 

> A Laravel Shopping Website

<p align="center">
    <img src="https://github.com/ashishnimrot/EcommerceLaravel/blob/master/GetLocalCountryDetail.png">
</p>

## Features

- Laravel 6.3
- Display only the first 6 products with images and amounts.
- Sort option based on prize low to high or high to low.
- Filter option based on the product category.
- Convert currency from local or select currency rates.

### Libraries
- Composer (to autoload the libraries listed below) - https://getcomposer.org/
- nategood/httpful (to make API calls) - https://github.com/nategood/httpful
- ######## symfony twig(templating) -  http://twig.sensiolabs.org/documentation #######
- Laravel blade(templating)
- twitter bootstrap (to represent data) - http://getbootstrap.com/


## Installation

- `composer create-project --prefer-dist cretueusebiu/laravel-vue-spa`
- Edit `.env` and set your database connection details
- (When installed via git clone or download, run `php artisan key:generate` and `php artisan jwt:secret`)
- `php artisan migrate`
- `npm install`

## Usage

#### Development

```bash
# build and watch
npm run watch

# serve with hot reloading
npm run hot
```

#### Production

```bash
npm run production
```

## Socialite

This project comes with GitHub as an example for [Laravel Socialite](https://laravel.com/docs/5.8/socialite).

To enable the provider create a new GitHub application and use `https://example.com/api/oauth/github/callback` as the Authorization callback URL.

Edit `.env` and set `GITHUB_CLIENT_ID` and `GITHUB_CLIENT_SECRET` with the keys form your GitHub application.

For other providers you may need to set the appropriate keys in `config/services.php` and redirect url in `OAuthController.php`.

## Email Verification

To enable email verification make sure that your `App\User` model implements the `Illuminate\Contracts\Auth\MustVerifyEmail` contract.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.
