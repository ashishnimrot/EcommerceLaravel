# International shopping website 

> A Laravel Shopping Website

<p align="center">
    <img src="https://github.com/ashishnimrot/EcommerceLaravel/blob/master/GetLocalCountryDetail.png">
</p>

## Features

- Laravel 7.0
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

- `git clone https://github.com/ashishnimrot/EcommerceLaravel.git`
- `cd EcommerceLaravel`
- `composer install`
-  Edit `.env` and set your database connection details 
- `php artisan key:generate`
- `php artisan migrate:fresh --seed`


## Usage

#### Development

```bash
# serve on browser
php artisan serve
```
