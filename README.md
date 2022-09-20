# Food-recipes (Laravel 8 + VueJs 3)

Food recipies website, with administration section

## Contents

1. [Overview](#overview)
1. [Install](#install)
1. [Database](#database)
1. [Credentials](#credentials)

## Overview


## Install

For installation, it requires composer package management.

So clone the repository and install the package with composer.

```bash
git clone https://github.com/gxl27/food-recipes.git;
cd food-recipes;
composer install;
npm install;
```

Make sure you used "chown -R group:group" on the folder and also give the permision for the "public" directory "chmod 777 -R public"

Also, you need to copy the .env.exemple file as .env file and check the database connection.
For the key configuration, use the command "php artisan key:generate"

## Database

> :warning: **The repository contains a demonstrative database, .env file needs to be change with your credentials** 

After install, make sure you have a database connection and change the .env file with your user and password.


## Credentials

Now the instalation it's complete and the administration area (/admin) can be accessed.
