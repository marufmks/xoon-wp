<?php

/**
 * Theme functions, definitions, dependencies
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @author  EgensLab
 * @package EGNS
 * @since   1.0.0
 */


// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}


/**
 * Define EGNS Folder Path & Url Const
 * @since 1.0.0
 **/
define('EGNS_THEME_ROOT', get_theme_file_path());
define('EGNS_THEME_ROOT_URL', get_theme_file_uri());
define('EGNS_INC', EGNS_THEME_ROOT . '/includes');
define('EGNS_THEME_FUNCTION', EGNS_INC . '/theme-options/functions');
define('EGNS_THEME_SETTINGS', EGNS_INC . '/theme-options/options/settings/');
define('EGNS_THEME_OPTIONS', EGNS_INC . '/theme-options/options/');
define('EGNS_THEME_SETTINGS_IMAGES', EGNS_THEME_ROOT_URL . '/includes/theme-options/images');
define('EGNS_OPTION_ID', 'egns-options');
define('EGNS_META_ID', 'egns-meta');
define('EGNS_PAGE_META_ID', 'egns-meta-page');
define('EGNS_TGMA', EGNS_INC . '/plugins/tgma');
define('EGNS_CSS', EGNS_THEME_ROOT_URL . '/assets/css');
define('EGNS_JS', EGNS_THEME_ROOT_URL . '/assets/js');
define('EGNS_ASSETS', EGNS_THEME_ROOT_URL . '/assets');


/**
 * Enqueue Style and Script.
 */
require EGNS_INC . '/functions/enqueue.php';

/**
 * Theme setup and custom theme supports.
 */
require EGNS_INC . '/functions/theme-setup.php';

/**
 * Theme Breadcrumbs
 */
require EGNS_INC . '/functions/breadcrumb.php';

/**
 * Theme Widgets.
 */
require EGNS_INC . '/functions/widgets.php';

/**
 * Comment Form
 */
require EGNS_INC . '/functions/comment.php';

/**
 * Excerpt.
 */
require EGNS_INC . '/functions/excerpt.php';

/**
 * Blog Pagination 
 */
require EGNS_INC . '/functions/pagination.php';

/**
 * Modified Hooks 
 */
require EGNS_INC . '/functions/modified-hooks.php';

/**
 * Theme Helper functions
 */
require EGNS_INC . '/class-egns-helper.php';

/**
 * Theme option panel Settings
 */
require EGNS_INC . '/theme-options/options/theme-options.php';

/**
 * EGNS Template Tags
 */
require EGNS_INC . '/egns-template-tags.php';

/**
 * TGM plugin activation.
 */
require_once EGNS_INC . '/plugins/tgma/activation.php';

/**
 * Include load more feature
 */
require_once EGNS_INC . '/functions/load-more.php';

/**
 * Include Custom Style
 */
require_once EGNS_THEME_FUNCTION . '/custom-css.php';
