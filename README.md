# NetBrothers WordPress Skeleton Theme

This minimalistic skeleton theme is intended as a starting point, if you plan to
develop a WordPress theme from scratch.

- No third-party dependencies.
- No framework.
- Just a simplistic bare-bone theme to get you started.

## Installation 

You may simply [fork it](https://github.com/netbrothers-gmbh/wordpress-skeleton-theme/fork),
[download it](https://github.com/netbrothers-gmbh/wordpress-skeleton-theme/releases)
or create a new project by using [Composer](https://getcomposer.org/):

```bash
composer create-project netbrothers-gmbh/wordpress-skeleton-theme my-awesome-theme
```

## Styles

*Note: The `style.css` file in the theme's root directory is required by WordPress. If
you delete it, the theme cannot be loaded.*

This file is prefilled with Eric A. Meyer's
[Reset CSS](https://meyerweb.com/eric/tools/css/reset/) and then some simple
rules to make the rendered pages at least readable.

Since the file already exists, you might want to use it as a build target with
your preferred build tool. Or you could just use it as a starting point and add
rules as needed.

In case you need to load styles from other files or external resources, you have
to employ the [WordPress enqueue mechanism](https://developer.wordpress.org/themes/basics/including-css-javascript/).

## Scripts

Although this is not a WordPress requirement, the file `js/scripts.js` fulfills
the same purpose as the `style.css` file but for your JavaScript code. 

## License

This project is licensed under the
[GNU General Public License Version 3](https://www.gnu.org/licenses/gpl-3.0.txt)
where not otherwise stated.

## Author

[Thilo Ratnaweera, NetBrothers GmbH](https://netbrothers.de)

[![nb.logo](https://netbrothers.de/wp-content/uploads/2020/12/netbrothers_logo.png)](https://netbrothers.de)
