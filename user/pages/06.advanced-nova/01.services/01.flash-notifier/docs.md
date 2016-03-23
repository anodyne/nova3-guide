---
title: Flash Notifier
taxonomy:
    category: docs
---

Flash notifications allow messages to be passed from one request into the next for confirmation of an action or notification of an error. Nova utilizes a home-grown flash notification class that interfaces with the SweetAlert Javascript library to give Nova's notifications a bit of life and vibrance.

## The Flash Helper

The Flash Notifier comes with a helper you can use anywhere flash notifications need to be set, whether it's inside a controller, in another class, or even in a view if the situation calls for it. Getting started with the Flash helper is as easy as passing some arguments to the function:

```php
flash('info', "Some Info", "The more you know...");
```

Using the above code will create an info flash notification that will appear on the next page load.

You can also access the underlying instance of the class and chain any of the class methods to give you cleaner, more readable code:

```php
flash()->success('Congrats!');

flash()->error('Uh Oh!');

flash()->warning('Better Watch Out!');
```

!!! The above is how flash notifications are set in all of Nova's core controllers.

## Getting an Instance of the Class

The class itself is stored within the IOC container with a key of `nova.flash`. Because an instance of the class is in the container, it means you don't have to instantiate your own instance of the class (unless you have a really good reason to). There are several ways to get the instance of the class to store in a variable:

- Use the App facade and "make" the instance stored in the container: `$flash = App::make('nova.flash');`
- Use the App helper as a shortcut to using the App facade: `$flash = app('nova.flash');`
- Use the Flash class's own facade: `$flash = Flash::getFacadeRoot();`
- Use the Flash helper to get at the existing instance of the class: `$flash = flash();`
