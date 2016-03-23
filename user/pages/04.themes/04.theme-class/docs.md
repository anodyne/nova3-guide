---
title: Theme Class
taxonomy:
    category: docs
---

Nova themes aim to provide theme developers with as much flexibility as possible. This includes everything to basic look-and-feel changes to wholesale changes to how a template is built up or data is processed. To provide consistency across the entire system, Nova allows themes to modify its core theme processing behavior through a `Theme` class. If you want to make more advanced changes to how your theme is built up, you can simply create a `Theme` class and Nova will load the class automatically. It isn't required, but it does give you even more control over different aspects of building up your theme.

## Interfaces

Like other areas of Nova, the `Theme` class utilizes several interfaces to ensure every theme has the same minimum functionality. The base `Theme` class implements two interfaces: `Themeable` and `ThemeableInfo`. In most cases, developers will simply extend from the base `Theme` class, so understanding these interfaces isn't crucial. However, it is also possible to start from scratch with your `Theme` class. In that case, you __must__ implement both interfaces. If you don't, Nova will throw an exception since it doesn't see your `Theme` class implementing the correct interfaces.

### `Themeable`

The `Themeable` interface defines methods for building up your theme when it comes time to render it for the browser. With the `Themeable` interface, Nova defines methods for handling building up the structure, template, menus, footer, pages, Javascript, and others. If there's something you want to be handled different than the default with your theme, this is where you can define those actions for the specific sections you need to modify.

### `ThemeableInfo`

The `ThemeableInfo` interface defines methods for getting the information about a theme, such as the author, credits, full name, location, vendor name, and version information. These methods are defined in the base `Theme` class, but you can override any of them that you choose to.