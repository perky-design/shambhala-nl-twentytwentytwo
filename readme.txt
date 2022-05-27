===  Shambhala Twenty Twenty Two ===

A full site editing theme for WordPress.

![Shambhala Twenty Twenty Two](https://github.com/perky-design/water-tiger/blob/master/screenshot.png?raw=true)

Contributors: Joop Laan
Tested up to: 6.0
Requires at least: 5.9
Requires PHP: 7.2
Version: 1.0.0
License: GPLv2 or later
License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)
Copyright: Shambhala NL

== Guide ==

=== Folder structure ===

Assets        - Images, JavaScript, and CSS files.
Functions     - The WP functions.
Parts         - HTML template parts.
Patterns      - Block pattern examples (register and unregister patterns and pattern categories.)
Templates     - HTML block templates.
functions.php - Used to call the PHP files in the functions directory.
index.php     - Required to activate the theme.
style.css     - Required to activate the theme.
theme.json    - Settings and default styles.
license.txt   - GPL v2
readme.txt    - Information about the theme.
screenshot.png

=== Tooling ===

You can install the tools by opening yor terminal in the themes root folder
and entering the following commands:

```npm install```
```composer install```

=== CSS ===

To compare your code against the WordPress CSS coding standards, use the command: ```npm run lint:css```
To fix the CSS use: ```npm run lint-fix:css```

=== PHP ===

To compare your code against the PHP coding standards,
use the command: ```composer standards:check```

For PHPStan analysis, use the command: ```composer analyze```

=== JavaScript ===

To compare your code against the JavasCript coding standards, use the command: ```npm run lint:js```
To fix the JS, use the command: ```npm run lint-fix:js```

== Changelog ==

0.1.0 Added Block Pattern
0.0.1 Initial release

== Licence ==

Shambhala Twenty Twenty Two is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
