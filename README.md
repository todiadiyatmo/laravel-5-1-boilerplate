# laravel-5-1-boilerplate
A simple base Laravel 5.1 project using bootstrap.

#Install
1. clone this project in the root directory
2. >> `composer update`
3. >> `php artisan key:generate`
4. setup your database credentials (using .env file)
5. >> php `php artisan migrate`
5. Have fun

#About

This project uses Bootstrap 3

implement [barryvdh Laravel debugbar](https://github.com/barryvdh/laravel-dompdf)

#auth

- To register go to path/auth/register
- To login go to path/auth/login
- logout in path/auth/logout

#bootstrap templating

* base layout: /resources/views/app.blade.php

* partials : /resources/views/partials

  * layout
  
    * navbar.blade.php
    
    * errors.blade.php
    
  * auth
  
    * login.blade.php
    
    * register.blade.php
    
* home : /resources/views/home.blade.php

#Important! 
Issue report and pull requests are welcome!

I like to invite you to visit my website on [Jefferochoa.com.ve](http://jefferochoa.com.ve)
