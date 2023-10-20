
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Installation


- [Navigate to App\Providers\AppServiceProvder and comment out all the View::share in the boot method].
- run ``composer update `` .
- run `` npm install ``.
- run ``npm run dev``.
- run `` php artisan key:generate ``.
- set up your database in the .env
- run `` php artisan migrate ``.
- run `` php artisan db:seed ``.
- run `` php artisan storage:link ``.
- run `` npm install ``.
- run `` npm run dev ``. for development
- run `` npm run build ``. for production asset build
- [Then navigate back App\Providers\AppServiceProvder and uncomment out all the View::share in the boot method].
- run `` php artisan serve ``.

### Google Recaptcha config
- visit https://www.google.com/recaptcha/admin/create and create your app on version 2 and copy your ID and Secret to your .env 

### Google login config
- visit https://developers.google.com/identity/sign-in/web/sign-in create your app add oauth and copy your ID and Secret to your .env 

### Facebook Login Config
- visit https://developers.facebook.com/ create your app add facebook login and copy your ID and Secret to your .env 

#### Paypal for production
- To get live credentials Create a paypal merchant/business account
- Then visit https://www.paypal.com/businessmanage/credentials/apiAccess
- Copy credentials to your .env

#Admin Credentials
- admin@admin.com p/s admin123

