<?php
/**
 * Kint PHP Debugger - a modern and powerful PHP debugging helper
 *
 * @package         Know_The_Code\Kint_PHP_Debugger
 * @author          hellofromTonya
 * @license         dual license GPL-2.0+ & MIT (Kint is licensed MIT)
 * @link            https://knowthecode.io/
 *
 * @wordpress-plugin
 * Plugin Name:     Kint PHP Debugger
 * Plugin URI:      https://github.com/KnowTheCode/kint-php-debugger
 * Description:     Kint is a a modern and powerful PHP debugging helper, which requires zero-setup and replaces var_dump(), print_r() and debug_backtrace().  This plugin is a wrapper for Kint.
 * Version:         1.2.0
 * Author:          hellofromTonya
 * Author URI:      https://knowthecode.io/
 * Text Domain:     wpkint
 * Requires WP:     3.5
 * Requires PHP:    5.3
 */
namespace Know_The_Code\Kint_PHP_Debugger;

$pathto_kint = trailingslashit( __DIR__ ) . 'src/kint-php/kint/Kint.class.php';

if ( ! class_exists( 'Kint' ) && is_readable( $pathto_kint ) ) {
	require_once $pathto_kint;
}
