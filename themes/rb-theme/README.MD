# Mimmi Wordpress Theme

BEROENDEN, KRAV, BEGRÄNSNINGAR, MÅLPLATTFORMAR (TEX LÄGSTA WEBBLÄSARVERSIONER, PHP VERSION, WEBBSERVERKRAV, ETC) SKA SKRIVAS HÄR. 

A theme for WordPress using [TailwindCSS](https://tailwindcss.com/), with [PostCSS](https://postcss.org) and [Laravel Mix](https://laravel-mix.com/). Built from the [amoba](https://github.com/jeffreyvr/amoba.git) boilerplate.

## Getting started

- Run `npm install`
- Run `npm run development`
- Run `npm run watch` to start developing

You will find the editable CSS and Javascript files within the `/resources` folder.

Before you use your theme in npm run watch production, make sure you run `npm run production`.

## Block editor support

amoba comes with basic support for the [block editor](https://wordpress.org/support/article/wordpress-editor/).

CSS-classes for alignment, background and text colors will be generated automatically. You can modify this within the `tailwind.config.js` file.

To make the editing experience within the block editor more in line with the front end styling, a `editor-style.css` is generated. This file is only compiled on production builds.

### Define theme colors

Four colors (primary, secondary, dark and light) are defined from the beginning. You can modify the colors in `amoba.json`.

### Define theme font sizes

You can modify the font sizes within `amoba.json`.

## JIT

[Tailwind CSS JIT](https://github.com/tailwindlabs/tailwindcss-jit) is used to allow for fast compiling.

If you prefer to use the regular Tailwind CSS instead, you can change to that dependency in `package.json` as was done up to amoba v0.0.7 ([example](https://github.com/jeffreyvr/amoba/blob/0.0.7/package.json#L33)).
Also make sure to you change the PostCSS plugins in `webpack.mix.js` ([example](https://github.com/jeffreyvr/amoba/blob/0.0.7/webpack.mix.js#L16)).

## PurgeCSS

By default, PurgeCSS is enabled. You can modify or disable it by changing the settings in the `tailwind.config.js` file. There are several [PurgeCSS options](https://tailwindcss.com/docs/optimizing-for-production#purge-css-options).

## Links

- [Screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [Laravel Mix Documentation](https://laravel-mix.com/docs)