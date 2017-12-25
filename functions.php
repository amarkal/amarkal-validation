<?php
/**
 * WordPress Validation
 *
 * A set of data validation functions for WordPress.
 *
 * @package   amarkal-validation
 * @author    Askupa Software <hello@askupasoftware.com>
 * @link      https://github.com/amarkal/amarkal-validation
 * @copyright 2017 Askupa Software
 */

// Prevent direct file access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Prevent loading the library more than once
 */
if( defined( 'AMARKAL_VALIDATION' ) ) return false;
define( 'AMARKAL_VALIDATION', true );