<?php
/**
 * Elgg Spot SEO start.php
 *
 * @package SpotSEO
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2013
 * @link http://www.thinkglobalschool.com/
 *
 */

elgg_register_event_handler('init', 'system', 'spotseo_init');

function spotseo_init() {
	// Register and load library
	elgg_register_library('elgg:spotseo', elgg_get_plugins_path() . 'spotseo/lib/spotseo.php');
	elgg_load_library('elgg:spotseo');

	// Extend page/elements/head
	elgg_extend_view('page/elements/head', 'spotseo/meta_description');
}