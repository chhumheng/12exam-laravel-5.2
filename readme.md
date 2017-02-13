# Installation Method
- Clone this repository ==> git clone https://github.com/henggithub/12exam.git
- Install Composer (if already install skip this step)
- Use Composer to install component 
    ==> composer install
    ==> composer update
- Create database name: 12exam
- database setup/ config database ==> https://tutorials.kode-blog.com/laravel-install-and-configure

# Command Line used

## Clone repository
```sh
git clone https://github.com/henggithub/12exam.git
```

## Composer
### Installation

Download Composer from here
```url
https://getcomposer.org/
```

### Install Dependencies
```sh
composer install
```
```sh
composer update
```

## Database
```file
    create database name: 12exam
```

```file
   php artisan migrate
```

```file
    php artisan db:seed --class=DatabaseSeeder
```


## Configure your enviroment
* Duplicate the file '.env.example' and rename it to '.env'
```sh
cp .env.example .env
```
* Edit ur Database connection in '.env' file
* Generate new APP_KEY
```sh
php artisan key:generate
```

Best regart,
CHHUM Heng!

# Done!!! Test your project
    login Admin:
    user name: amin
    password: 123456
