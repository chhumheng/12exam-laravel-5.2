# Installation Method
- Clone this repository
- Install Composer (if already install skip this step)
- Use Composer to install component
- Import Database to your local development

# Command Line used

## Clone repository
```sh
git clone {git-url} {directory}
```
* use without {}

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

## Import Database
```file
bongpheakdb.sql
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

# Done!!! Test your project
