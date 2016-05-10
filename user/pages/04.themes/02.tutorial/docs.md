---
title: Theme Tutorial
taxonomy:
    category: docs
---

Let's create a basic theme that will cover some of the most basic things you may want to do with your own themes.

We'll start by creating the skeleton of our theme. You can use the Artisan `nova:make:theme` command to set your theme up quickly, but for further clarity, we'll do all of our setup manually for this theme.

1. Create a directory in the root `/themes` folder called __emerald__
2. Create a directory in your theme called __design__
3. Create a directory in your `design` folder called __css__
4. Create a file called `custom.css` in the `design/css` directory

You now have the minimum required structure for your theme!

```
/themes
    /emerald
        /design
            /css
                custom.css
```

! Since the Settings page hasn't been built, you'll need to manually modify the `theme` field in the settings database table to be `emerald` otherwise you won't see any changes. Also note that you'll need to be logged out to see these changes since they apply to the site as a whole and not the theme associated with your user account.

Let's start by changing up the page header for every page in our theme.

```css
.page-header {
	border-bottom: none;
}

.page-header h1 {
	color: #4caf50;
	font-family: "Roboto";
	font-size: 5rem;
	font-weight: 300;
}
```

With just a few lines of CSS in our `custom.css` file, we've updated how the page header on all pages looks. Now, we're using a different font, a bigger font size, lightening the weight up, and using a different color. You can already see the benefit of storing all the base styles in the Nova core! Our theme is actually really small because we're only changing what we want to be different from the base styles instead of re-defining all of the base styles again.

Let's keep making some changes to our theme. This time, let's focus on links.

```css
main a {
	padding-bottom: 0.1rem;

	color: #388e3c;
	border-bottom: 0.1rem dotted;
	font-variant: small-caps;
	font-weight: bold;
	font-size: 125%;
}

main a:hover {
	color: #4caf50;
	text-decoration: none;
	border-bottom: 1px solid;
}
```

Now, we've changed the way that links look in the main content of the site. Not only are links now green, but we're using a bold small caps font with a dotted line under it that turns to a solid line when we hover over it. Again, we've made all these changes with only a few lines of CSS instead of having to dig through hundreds of lines of existing CSS that we wouldn't have touched anyway.

!!! The `main` element is an HTML5 element that we wrap around the content. By targeting that element specifically, we ensure that any links that _aren't_ in that element stay the way they are by default.

Let's go a little crazy here and update the style of the top navbar to make it static so it always stays at the top of the page. Instead of trying to do this in the CSS, we're going to leverage Nova's extensive use of partials and change the Bootstrap classes that we're using when building up the menu. To start this, we need to create a folder structure to do this.

1. Create a directory called `components` at the root of the theme
2. Create a directory called `partials` in the `components` folder
3. Copy the `menu-combined.blade.php` from `nova/resources/views/components/partials` and paste it into your own `components/partials` folder

Now that we have this file here, Nova will use it instead of what's in the core.

```
/themes
    /emerald
        /components
            /partials
                menu-combined.blade.php
        /design
            /css
                custom.css
```

Update the opening line of the `menu-combined` partial to use the Bootstrap fixed navbar class.

```html
<nav class="navbar navbar-inverse navbar-fixed-top">
```

You'll notice now that the style of the navbar has changed and is fixed at the top of the browser window as well as being dark instead of light. (If you want to keep the navbar aligned with the site content, you'll need to update the `container-fluid` class to be `container` instead.) We're also going to add a little padding to keep the page header off the navbar.

```css
body {
    padding-top: 5rem;
}
```

It's really up to you where you want to go from here, but for the sake of completeness, let's darken the background, put the main content into a lighter rounded container and throw a drop shadow under the content. These kinds of changes are trivial and in the end our `custom.css` would look something like this:

```css
body {
	padding-top: 7.5rem;

	background: #ddd;
}

.page-header {
	margin-top: 0;

	border-bottom: none;
}

.page-header h1 {
	margin-top: 0;

	color: #4caf50;
	font-family: "Roboto";
	font-size: 5rem;
	font-weight: 300;
}

main {
	padding: 2rem;

	background: #fafafa;
	border: 0.1rem solid #ccc;
	border-radius: 1rem;
	box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.25);
}

main a {
	padding-bottom: 0.1rem;

	color: #388e3c;
	border-bottom: 0.1rem dotted;
	font-variant: small-caps;
	font-weight: bold;
	font-size: 125%;
}

main a:hover {
	color: #4caf50;
	text-decoration: none;
	border-bottom: 1px solid;
}
```

You can see with this short tutorial how much you can change with a little bit of CSS and even updating some of the files Nova uses in partials. There's a lot more you can do with just a little experimentation and reading about some of Bootstrap's features and class. Experiment and see where it takes you!

## Variants

Before we close up this tutorial, let's talk about a new feature with Nova themes: __variants__.

Simply put, variants are a way to provide variations of your theme without need to re-theme the entire thing. In most cases, these will be related to the same theme just in different colors, but you're not limited to that sort of thing. Let's create a `variants` directory in the `design/css` folder and create a `blue.css` file.

```
/themes
    /emerald
        /components
            /partials
                menu-combined.blade.php
        /design
            /css
                /variants
                    blue.css
                custom.css
```

Now that we have a variant stylesheet, we can make some changes to update the colors we're using.

```css
.page-header h1 {
	color: #2196f3;
}

main a {
	color: #1976d2;
}

main a:hover {
	color: #2196f3;
}
```

You'll notice that we don't need to re-do all of our spacing and sizing and such, we just need to override the colors from green to blue. Variants give theme developers a lot of options for providing some variety in their themes without having to build whole new themes. You can do different colors or even provide a variant that takes it from a light theme to a dark theme all just by adjusting a few lines of your CSS within the variant stylesheet(s).

! Since the Settings page hasn't been built, you'll need to manually modify the `theme_variant` field in the settings database table to be `blue`. When the Settings page is built, Nova will automatically provide a dropdown of any variants a theme has.

!!! Any components you override apply to the __entire__ theme and not a specific variant. There's no way to override just for a specific variant. In the case of this tutorial, if you wanted the navbar to have an inverse color, you'd have to do that explicitly in CSS instead of changing the class in the partial.

## Wrapping Up

This is a pretty simple example, but it shows you a few of the possibilities for building your themes. In future sections, we'll talk more about some of the advanced topics about themeing in Nova.
