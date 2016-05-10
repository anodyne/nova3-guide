---
title: Installation
taxonomy:
    category: docs
---

! Nova is currently in an alpha state and as such is __unstable__ and __not suitable__ for production environments.

Nova NextGen can be run from any web server running PHP 7.0.0 or higher with a MySQL, PostgreSQL, or MariaDB database. You can also install Nova NextGen on a local server if you're running one, so long as it has PHP and a database.

1. If you have a previous Preview Release installed, you will need to first uninstall that in order to do a fresh install of Preview Release 4
2. Upload Nova NextGen to your server (or if it's a local server, copy the files to the location where you want it)
3. Navigate to `http://{yoursite}` and you'll be automatically redirected to the Setup Center
4. You may be prompted to make certain directories writable in order to continue. Laravel requires having the ability to create files for logging, caching, and other framework operations. You'll need to make the `config`, `storage`, and `nova/bootstrap/cache` directories (as well as all their sub-directories) writable by the web server (`755`).
5. Select the option to do a Fresh Install of Nova NextGen and follow the prompts

Once Nova NextGen is installed, you'll be re-directed to a basic front page with some links to move around a few different places in the system, including being able to log in and use some of the admin features. In future preview releases, you'll be able to use more of the system as it's built.

!!! __Theme developers:__ Much of the structure for themes is in place now. You can look through the nova/resources/views directory to see what's there and read more in the Site Themes overview of the Nova NextGen Vision series.
!!!
!!! __Extension developers:__ There hasn't been any work done on extensions yet, but in future preview releases we'll have more stuff for you to play with.