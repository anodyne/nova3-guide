---
title: Overview
taxonomy:
    category: docs
---

Themes in Nova are actually quite simple and incredibly flexible because they're built with just some basic understanding of CSS. You can even choose to use a CSS preprocessor like Sass or Less if you so choose, but you don't have to use those tools if you don't want or need to. It simply comes down to your own personal preferences.

## Rules of Themeing

### Replacing Base Stylesheets

Nova stores its base styles right in the Nova core. This allows Anodyne to update base styles without forcing theme developers to make changes to their themes every time an update is made. In some situations though, you may want to do something more extreme for your theme and skip using the base styles altogether. Nova's theme system is set up in such a way that you can replace any or all of the base stylesheets with your own by understanding the rules below:

- Nova loads a `base.style.css` stylesheet every time __unless__ you put a `style.css` stylesheet in your `design/css` directory. If Nova sees the `style.css` file then it won't load the base stylesheet and will use your stylesheet instead.
- Nova loads a `base.icons.css` stylesheet every time __unless__ you put an `icons.css` stylesheet in your `design/css` directory. If Nova finds the `icons.css` stylesheet then it will skip loading the base icons stylesheet and use your icon stylesheet instead.
- Nova loads a `base.responsive.css` stylesheet every time __unless__ you put a `responsive.css` stylesheet in your `design/css` directory. In that instance, Nova won't load the base responsive stylesheet and will use your responsive stylesheet instead.

### Supplementing Base Stylesheets

In the event that you want to keep the base styles and supplement them with your own styling (the most likely option for most theme developers), here are some rules you should understand:

- Nova will load a `custom.css` stylesheet from your `design/css` directory (if it exists) _after_ the base stylesheet.
- Nova will load a `custom.icons.css` stylesheet from your `design/css` directory (if it exists) _after_ the base icons stylesheet.
- Nova will load a `custom.responsive.css` stylesheet from your `design/css` directory (if it exists) _after_ the base responsive stylesheet.
