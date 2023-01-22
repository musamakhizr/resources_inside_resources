# CLEAN CODE LARAVEL - Refactoring API Resources
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API Resources Inside API Resources

The best way to deal with Carbon dates and times for your clients is to create a separate resource for them and use it in other API resources, rather than cluttering up your API resources.

>If you want to return data in a specific way for many controllers and many API resources reusing that, you can create a separate eloquent API resource to be reused in other resources

## Steps

- Create an API Resource `DateTimeResource` 
- All of your models have `created_at` and you decide to have your logic for created_at and return in a structure of `human time` and `date time` 
```php
public function toArray($request)
{
    return [
        'human' => $this->diffForHumans(),
        'date_time' => $this->toDateTimeString(),
    ];
}
```
