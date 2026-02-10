<?php
/**
 * Plugin Name: Frenchy Revisions Limiter
 * Plugin URI: https://frenchy.es/plugins/limitar-revisiones-entradas/
 * Description: Limits the number of stored post revisions to improve database performance.
 * Version: 1.1.4
 * Author: Frenchy
 * Author URI: https://frenchy.es
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: frenchy-revisions-limiter
 * Requires at least: 5.8
 * Tested up to: 6.9
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'wp_revisions_to_keep', 'frenchy_revisions_limiter_limit', 10, 2 );
function frenchy_revisions_limiter_limit( $num, $post ) {
    $max = apply_filters( 'frenchy_revisions_limiter_max', 3, $post );
    return (int) $max;
}

register_activation_hook( __FILE__, 'frenchy_revisions_limiter_on_activate' );
function frenchy_revisions_limiter_on_activate() {
    if ( ! current_user_can( 'activate_plugins' ) ) {
        return;
    }

    global $wpdb;

    // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
    $wpdb->query(
        $wpdb->prepare(
            "DELETE FROM {$wpdb->posts} WHERE post_type = %s",
            'revision'
        )
    );
}
