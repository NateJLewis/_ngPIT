# _ngPIT
A starter theme using AngularJS, Angular Material, and the WordPress _S base theme.

## Required Plugins
* WordPress REST API (Version 2)
* Advanced Custom Fields

## Suggested Plugins
* ACF-Content Analysis for Yoast SEO
* ACF to REST API
* iThemes Security (formerly Better WP Security)
* WordPress SEO by Yoast
* Google Analytics for WordPress

### Installing Required and Suggested Plugins
Both the required and suggested plugins are added via the [TGM_Plugin_Activation class](/includes/plugins/class-tgm-plugin-activation.php) created by [Thomas Griffin](http://tgmpluginactivation.com/). Once the theme is activated click on the "Activate required plugins" link in the notification to automatically download the plugins.

## Theme setup
* Run `sudo npm install`
* Run `bower install`

## Build SASS, Add Browser Prefixes, Concat, Minify, Watch for changes
* Run `grunt dist`
  * Runs ngAnnotate, concat, uglify
* Run `grunt default`
  * sass
  * postcss
  * cssmin
  * watch
