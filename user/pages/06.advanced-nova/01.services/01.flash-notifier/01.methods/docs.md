---
title: Methods
taxonomy:
    category: docs
---

### create($title, $message, $level, $key)

In reality, all of the other methods in the class simply call the `create()` method and just pass the appropriate parameters in. This gives the class a unified way of building these messages.

- title (default: null) - The title of the flash message
- message (default: null) - Any explanation you may feel the title needs
- level (default: info) - The level of the message (info, success, error, warning)
- key (default: flash_message) - The key used to store the information in the session for flashing to the next page load

### error($title, $message)

Error messages should be used to show when something unexpected has happened or when something the user was trying to do failed.

```php
flash()->error("Post Creation Failed!", "We couldn't create your mission post because of an error.");
```

### info($title, $message)

Info messages are catch-all messages that should be used when the other available levels don't make sense.

```php
flash()->info("Nova Updated!", "Nova was recently updated to version 3.1. See the new features...");
```

### success($title, $message)

Success messages should be used to show a user that an action they're trying to take succeeded.

```php
flash()->success("New Story Created!");
```

### warning($title, $message)

Warning messages don't necessarily indicate a problem, but is something the user should be made aware of.

```php
flash()->warning("Nova Update Available!", "Nova 3.1.5 is available and addresses issues with...");
```

### overlay($title, $message, $level)
