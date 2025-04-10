# ST. PHILIP THEME NOTES

`A starter theme called st_philip.`

**Contributors:** Automattic

- **Requires at least:** 4.5
- **Tested up to:** 5.4
- **Requires PHP:** 5.6
- **Stable tag:** 1.0.0
- **License:** GNU General Public License v2 or later
- **License URI:** LICENSE

**Tags:** custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

## Theme Description

This is a custom theme that was updated from an _s template. This was made for the St.Philip Antiochian Church in Edmonton. 

## Installation to Wordpress

1. In your admin panel, go to `Appearance` > `Themes` and click the `Add New` button.
2. Click `Upload Theme` and `Choose File`, then select the theme's .zip file. Click `Install Now`.
3. Click `Activate` to use your new theme right away.

## Theme Updating

To begin editing, you need to run a few commands in a shell.

```sh
$ npm install
$ composer install
```
From here if all plugins successfully download, you run:

```sh
$ npm run watch
```
This will initialize the watcher for SASS.
>[!TIP]
>Check the SFTP if you're still using it. All changes to SASS/CSS need to be manually synced to the server. This can be done by right clicking the css folder and clicking `Sync Local -> Remote`. The reverse can be used to pull new changes, only use if github is not update.


## FAQ

*Does this theme support any plugins?*

`st_philip` includes support for WooCommerce and for Infinite Scroll in Jetpack.

## Changelog

### 1.0 - May 12 2015
+ Initial release

### 2.0 - April 10 2025
- Theme updated for St. Philip Church

## Credits

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
* Created and Updated by Sam Acquino and Cherry Santos (C) 2025
