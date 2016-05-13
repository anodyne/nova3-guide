---
title: Icons
taxonomy:
    category: docs
---

Let's talk about icons. Compared to previous versions of Nova, Nova NextGen doesn't use images for icons, but instead, uses a font that includes all the icons. There are a lot of advantages to using an icon font over actual images, so let's talk about why we use icons fonts and then we'll dive into making changes to the icons for your theme.

## Why Icon Fonts?

1. __Easy Scalability__  
A problem with bitmap images is that they don’t scale well. They lose their quality when scaled up and waste file size when the images are scaled down. When you use icon fonts, you don’t face these problems. Icon fonts offer scalable images that will look the same irrespective of the font size. They are just like any other letter or number you use on a web page that appear the same when you use font size 5, size 10, or font size 24.
2. __Improves Page Load Time__  
When you use image icons, HTTP requests must be placed for each image which can slow down the load time of the web page. Also, images could take up a lot of web space because of their file size. When you use icon fonts, an HTTP request is not placed for each image, just for the font as a whole. This reduces the load on the server and improves the load time of web page.
3. __Vectors__  
Today, most webmasters prefer using icon fonts because they are resolution and vector independent. These fonts look good on both low and high resolution displays. They work well in high definition screens of tablets, laptops, and mobile phones. This makes them the ideal choice for both desktop and mobile sites. On the other hand, image icon may lose quality when the screen resolution changes.
4. __Use Locally__  
You can use custom-built fonts in various editing and design applications by adding it to the local system. Using the fonts can become easier when you assign ligatures to your glyphs. When you use image fonts, you cannot use this feature.
5. __Flexible__  
One of the main reasons why people prefer using icon fonts is because they are highly flexible. You don’t require special skills to change the colors or add shadows to the icons. Just add a few lines of CSS and your work is done. If you want to make these changes in image icons, you must know how to edit images.
6. __Transparent Backgrounds__  
Another advantage of using image icons is that they have transparent backgrounds that work really well in both old and new versions of popular browsers. Also, they don’t have white edge pixels that you find on many GIF images. These features make them highly compatible with most backgrounds.
7. __Easy to Use__  
Inserting an icon font in a web page is easy. All you have to do is add a few lines of code in the overall header of your site. Once you put the code in the header, you can easily place the icon of your choice on the pages.
8. __Better for responsive Web Design__  
When you use icon fonts, the retina displays and responsive web design will look much better because the fonts are resolution independent. Icon fonts make navigation and reading easy, and minimize the need for panning, scrolling, and resizing. These fonts provide an optimal viewing experience across various devices including desktops and mobiles.

## Changing Nova's Icons

Nova includes the Font Awesome icon font in th core by default. This allows us to provide icons as part of buttons, menu items, form tabs, form sections, and more. In some cases though, you may not want to use Font Awesome and may want to use a different icon font. Let's talk a little bit
