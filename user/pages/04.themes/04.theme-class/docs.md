---
title: Theme Class
taxonomy:
    category: docs
---

Nova themes aim to provide theme developers with as much flexibility as possible. This includes everything from basic look-and-feel changes to wholesale changes with how a template is built up or its data is processed. To provide consistency across the entire system, Nova allows themes to modify its core theme processing behavior through a `Theme` class. If you want to make more advanced changes to how your theme is built up, you can simply create a `Theme` class and Nova will load the class automatically. It isn't required, but it does give you even more control over different aspects of building up your theme.

## Contracts

Like other areas of Nova, the `Theme` class utilizes several contracts (what PHP calls interfaces) to ensure every theme has the same minimum functionality. The base `Theme` class implements four contracts: `ThemeIconsContract`, `ThemeInfoContract`, `ThemeMenusContract`, and `ThemeStructureContract`. In most cases, developers will simply extend from the base `Theme` class, so understanding these contracts isn't crucial. However, it is also possible to start from scratch with your `Theme` class. In that case, you __must__ implement all four contracts. If you don't, Nova will throw an exception.

### `ThemeIconsContract`

### `ThemeInfoContract`

### `ThemeMenusContract`

### `ThemeStructureContract`
