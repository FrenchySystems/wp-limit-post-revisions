# Limit Post Revisions

Minimal WordPress plugin that limits the number of stored post revisions to keep the database clean and efficient.

This plugin is designed as a lightweight utility for developers and site owners who want to reduce unnecessary database bloat without adding configuration panels or extra complexity.

## Features

- Limits the number of post revisions stored by WordPress
- Removes existing old revisions on plugin activation
- Works automatically with no configuration required
- Does not affect autosaves
- Extremely lightweight and fast
- Does not collect or store any user data

## Installation

1. Download or clone this repository.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin from the WordPress admin panel.
4. The plugin works automatically after activation.

## How it works

The plugin hooks into WordPress core revision handling and limits the number of revisions saved per post.

On activation, it also removes existing revision posts to immediately reduce database size.

## License

GPL-2.0-or-later

## Author

Developed by Frenchy  
https://frenchy.es/plugins/
