---
extends: _layouts.master
section: content
header: "Doing a Fresh Install"
pageTitle: "Installation"
category: "prologue"
nextLink: "/getting-help"
nextName: "Getting Help"
prevLink: "/"
prevName: "What Is Nova?"
---

<div class="callout callout__danger">
	<h4 class="callout__title"><i class="fa fa-exclamation-circle fa-fw"></i> Warning</h4>
	<p>Nova is currently in an alpha state and as such is <strong>unstable</strong> and <strong>not suitable</strong> for production environments.</p>
</div>

Nova NextGen can be run from any web server running PHP 7.0.0 or higher with a MySQL, PostgreSQL, or MariaDB database. You can also install Nova NextGen on a local server if you're running one, so long as it has PHP and a database.

1. If you have a previous Preview Release installed, you will need to first uninstall that in order to do a fresh install of Preview Release 4
2. Upload Nova NextGen to your server (or if it's a local server, copy the files to the location where you want it)
3. Navigate to `http://{yoursite}` and you'll be automatically redirected to the Setup Center
4. You may be prompted to make certain directories writable in order to continue. Laravel requires having the ability to create files for logging, caching, and other framework operations. You'll need to make the `config`, `storage`, and `nova/bootstrap/cache` directories (as well as all their sub-directories) writable by the web server (`755`).
5. Select the option to do a Fresh Install of Nova NextGen and follow the prompts

Once Nova NextGen is installed, you'll be re-directed to a basic front page with some links to move around a few different places in the system, including being able to log in and use some of the admin features. In future preview releases, you'll be able to use more of the system as it's built.

<div class="callout callout__info">
	<h4 class="callout__title"><i class="fa fa-info-circle fa-fw"></i> Theme Developers</h4>
	<p>While Nova's new themeing system is mostly complete, there are still areas that are receiving attention and will continue to be updated over the coming preview releases. As such, themes you begin to build before the theme system is completed may require additional work to display properly on future preview releases.</p>
</div>

<div class="callout callout__warning">
	<h4 class="callout__title"><i class="fa fa-exclamation-triangle fa-fw"></i> Extensions</h4>
	<p>The extension system is in its earliest phases of development. While some of the pieces are in place, more development work is necessary to bring extensions to where we want them.</p>
</div>
