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

## Database

> :warning: **The repository contains a demonstrative database, .env file needs to be change with your credentials** 

After install, make sure you have a database connection and change the .env file with your user and password.

For the linux machines, clear cache and set the permisions for the 2 folders "public" to 777:

```bash
php bin/console c:c;
chmod 777 -R public/*;
chmod 777 -R var/*;
```
## Credentials

Now the instalation it's complete and the administration area (/admin) can be accessed.
