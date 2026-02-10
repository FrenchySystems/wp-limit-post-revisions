=== Frenchy Revisions Limiter ===
Contributors: frenchy
Tags: revisions, performance, database, cleanup
Requires at least: 5.8
Tested up to: 6.9
Stable tag: 1.1.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Limits the number of stored post revisions to keep the WordPress database clean and efficient.

== Description ==

Frenchy Revisions Limiter is a lightweight WordPress plugin that limits the number of revisions stored for each post, helping to keep the database clean and improve overall performance.

The plugin works automatically after activation and does not require any configuration. It does not affect autosaves and does not collect or store any user data.

On activation, the plugin also removes existing old revisions, reducing database size from the start.

This plugin is designed as a simple, automatic solution for sites that want to avoid unnecessary database bloat caused by excessive post revisions.

== Features ==

* Limits the number of revisions stored per post
* Deletes old revisions on plugin activation
* Works automatically with no configuration required
* Does not affect autosaves
* Improves database efficiency
* Extremely lightweight (under 5 KB)
* No user data collection
* No external libraries

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/frenchy-revisions-limiter` directory, or install the plugin through the WordPress Plugins screen.
2. Activate the plugin through the "Plugins" screen in WordPress.
3. The plugin works automatically after activation.

== Frequently Asked Questions ==

= How many revisions does the plugin keep? =
By default, the plugin keeps up to 3 revisions per post.

= Does this plugin delete autosaves? =
No. Autosaves are not affected.

= Does the plugin require configuration? =
No. The plugin works automatically after activation.

= Can I change the number of revisions? =
Yes. Developers can change the number of revisions using the following filter:

`add_filter( 'frenchy_revisions_limiter_max', function () { return 5; } );`

= Does this plugin collect any user data? =
No. This plugin does not collect, store, or process any personal data.

== Changelog ==

= 1.1.4 =
* Renamed plugin to Frenchy Revisions Limiter.
* Updated plugin slug to be distinctive.
* Updated Plugin URI.
* Internal cleanup.

== Upgrade Notice ==

= 1.1.4 =
Recommended update. No breaking changes.
