<?php
/**
 * Plugin Name: mitmproxy loader
 * Description: Defines connection details for proxy and disables SSL verification
 * Version: 0.1
 * Author: Heiko Häng
 */

function set_proxy() {
    define('WP_PROXY_HOST', 'proxy');
    define('WP_PROXY_PORT', '8080');
}

set_proxy();

add_filter( 'https_ssl_verify', '__return_false' );
