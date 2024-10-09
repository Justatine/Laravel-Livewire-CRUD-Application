<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## References
- [Laravel Livewire CRUD App](https://medium.com/techvblogs/laravel-livewire-crud-tutorial-b8bdda8e44ad)
- [Laravel Docs](https://laravel.com/docs/11.x/)
- [Livewire Docs](https://livewire.laravel.com/docs/installation)
- [Flowbite || Tailwind CSS Components](https://flowbite.com/docs/components/)
- [Tailwind CSS Docs](https://tailwindcss.com/docs/)

## `Important Commands`

Initialize livewire: "composer require livewire/livewire".\
Make a livewire component: "php artisan make:livewire **_Livewire_name_**".\
No ideas about livewire? Try to watch this [video](https://www.youtube.com/watch?v=hL7sVFSkph8) to have some.

> [!IMPORTANT]
> Steps to create laravel project

1. Step 1: Create Laravel Application
    - composer create-project --prefer-dist laravel/laravel **_project_name_** 
2. Open config/app.php set **'timezone'=>'Asia/Manila'** 
3. Modify charset and collation in config/database.php **'charset'=>'utf8'** and **'collation'=>'utf8_general_ci'** 
4. Configure Database Details
    - Modify .env 
5. Install Livewire Package
    - composer require livewire/livewire
6. Create Model and Migration
    - php artisan make:model **_model_name_** -m
    - Configure app/database/migrations/**you_migration_table**.php
7. Migrate database
    - php artisan migrate
8. Modify inside model
    - public $timestamps = true; 
    - protected $fillable = [
        'data',
        'data',
        'data'
    ]; 
    - protected $guarded = [];
    - protected $primaryKey = '**you_primary_key**';
9. Create Livewire Component and View
    - php artisan make:livewire **_livewire_name_**
10. Configure app/Http/Livewire/**_your_livewire_name_**.php
11. Create resources/views/**_your_filename_**.php and update the following code into that file
12. Define Routes
    - Open routes/web.php and update the following code into that file
    - Route::get('/',function(){
        return view('**_your_filename_**');
    });
11. Run Project
    - php artisan serve