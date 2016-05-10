---
title: Requirements
taxonomy:
    category: docs
---

Nova has intentionally been designed with as few technical requirements as possible.

1. Web server (Apache or Nginx work well; LiteSpeed, Lightly, or IIS may work, but are untested)
2. PHP 7.0.0 or higher
3. A relational database system (MySQL, PostgreSQL, MariaDB)
4. A modern browser such as Google Chrome, Safari, or Firefox

! You can also use __sqlite__ as a database system, but it isn't recommended for production systems that require concurrent read/write operations (i.e. lots of traffic from users).

## Web Servers

Even though you don't technically _need_ a standalone web server, it's better to run one, even for local development. Luckily there are many options depending on your platform:

### Mac

- OS X 10.9 Mavericks already ships with the Apache web server and PHP 5.5, so job done!
- [MAMP/MAMP Pro](http://mamp.info/) comes with Apache, MySQL and of course PHP. It's a great way to get more control over which version of PHP you're running, setting up virtual hosts (MAMP Pro only), plus other useful features.
- Laravel Homestead (advanced users only)
- Laravel Valet (advanced users only)

### Windows

- [XAMPP](https://www.apachefriends.org/index.html) provides Apache, PHP, and MySQL in one simple package
- [MAMP for Windows](http://mamp.info/) is a long-time Mac favorite, but now available for Windows
- Laravel Homestead (advanced users only)

### Linux

- Many distributions of Linux already come with Apache and PHP built-in, if it's not built-in, then usually the distribution provides a package manager where you can install Apache and PHP without much hassle. More advanced configurations should be investigated with the help of a good search engine.

## Apache Requirements

Even though most distributions of Apache come with everything needed, for the sake of completeness, here is a list of required Apache modules:

- `mod_rewrite`
- `mod_ssl` (only if you wish to run Nova under SSL)

You should also ensure you have `AllowOverride All` set in the `<Directory>` and/or `<VirtualHost>` blocks so that the `.htaccess` file processes correctly and rewrite rules take effect.

## IIS Requirements

Although IIS is considered a web server ready to 'run-out-of-box' there are some changes that need to be made. To get Nova to run on an IIS server you need to install __URL Rewrite__. This can be accomplished using __Microsoft Web Platform Installer__ from within IIS. You can also install URL Rewrite by going to [iis.net](http://www.iis.net/downloads/microsoft/url-rewrite).

## PHP Requirements

Most hosting providers and even local LAMP setups have PHP pre-configured with everything you need for Nova to run out of the box. However, some Windows setups, and even Linux distributions local or on VPS (I'm looking at you Debian!) ship with a very minimal PHP compile. Therefore, you may need to install or enable these PHP modules:

- PDO support for the database of your choosing
- `gd` (a graphics library used to manipulate images)
- `mbstring` (multibyte string support)

## File Permissions

For Nova to function properly your web server needs to have the appropriate file permissions in order to write logs, caches, etc. When using either the CLI or GPM, the user running PHP from the command line, also needs to have the appropriate permissions to modify files.

Most hosting providers have configurations that ensure the web server running PHP will allow you to create and modify files within your user account. This means that Nova runs out-of-the-box on the vast majority of hosting providers. However, if you're running on a dedicated server, or even your local environment, you may need to adjust permissions to ensure you user and your web server can modify files as needed. There are a couple of approaches you can take.

In a local development environment, you can usually configure your web server to run under you user profile. This way the web server will always allow you to create and modify files.

You can also change the group permissions on all files and folders so that the web server's group has write access to files and folders while keeping the standard permissions. This requires a few commands to make this work (note: adjust www-data to be the group your apache runs under [www-data, apache, nobody, etc.]):
