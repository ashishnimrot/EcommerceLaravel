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

## Installation

- `git clone https://github.com/ashishnimrot/EcommerceLaravel.git`
- `composer install`
-  Edit `.env` and set your database connection details 
- `php artisan key:generate`
- `php artisan migrate:fresh --seed`


## Usage

#### Development

```bash
# serve on browser
`php artisan serve`
```
