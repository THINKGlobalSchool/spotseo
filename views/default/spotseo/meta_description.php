<?php
/**
 * Elgg Spot SEO Head View
 *
 * @package SpotSEO
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2015
 * @link http://www.thinkglobalschool.org/
 *
 */

$content = '';

$string = spotseo_get_current_page_segment_string();

$content = elgg_echo("spotseo:{$string}");

if ($content != "spotseo:{$string}") {
	echo "<meta name='description' content='{$content}' />";
}