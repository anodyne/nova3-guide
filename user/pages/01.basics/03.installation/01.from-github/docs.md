---
title: Installing from Github
taxonomy:
    category: docs
---

! Nova is currently in an alpha state and as such is __unstable__ and __not suitable__ for production environments.

1. Clone the `anodyne/nova3` repository to your computer.
2. Run the following commands (these may need to be run as `sudo` depending on your server):
    1. `chmod -R 777 storage`
    2. `chmod -R 777 config`
3. Install composer (recommended to install globally; for more information, see [here](https://getcomposer.org/doc/00-intro.md))
4. Create a new database for Nova
5. Install dependencies
    - Run `composer install --no-dev` if you want to get the standard dependencies that a stock installation of Nova NextGen will get
    - Run `composer install` if you want to get the standard dependencies that a stock installation of Nova NextGen will get plus all the development dependencies as well (PHPUnit, Faker, Laravel Debugbar, etc.)
6. Navigate to the site and the setup process will take over

## Routes

You can view registered routes by running `php artisan route:list`. In the future, the Page Manager will be the way to do this. There is also a `routes.php` file at the root that you can use to add your own routes for testing and development purposes until the Page Manager has been built.

!!! This routes file will not be available in future versions of Nova 3!

## Updating

Because of the nature of Nova's development, you'll want to pull the latest source on a regular basis to get the stuff that's being worked on. You can pull the source from the repo (either from the command line or through a GUI) and then take the following steps:

1. Run `composer install` from the command line (use the `--no-dev` flag if you don't want to pull the development dependencies)
2. Run `php artisan nova:refresh` from the command line (see section below)

! __Note:__ It's important to do a `composer install` instead of `composer update`. The `install` command will use the lock file that's pulled down from the repo to install dependencies, but the `update` command will go out and pull the latest. In those situations, you could be pulling something that breaks Nova, so the safer option is to do `install` and let us handle the updating piece and verifying that things work as expected.

#### The Dev Setup File

In order to use the `nova:refresh` command, you'll need to have a dev setup file in your root directory. Create a file named `_setup.php` at the root and put the following content in the file:

```php
<?php

return [

	'user' => [
		'name' => "name",
		'email' => "me@example.com",
		'password' => "password",
                'role' => 1,
	],

	'character' => [
		'first_name' => "FirstName",
		'last_name' => "LastName",
	],

	'settings' => [
		'theme' => "pulsar"
	],

    'content' => [
		'sim.name' => "USS Nova NCC-41510-C",
	],

];
```

You can change any of these items to your own values. The `nova:refresh` command will use these to re-install the Nova database.