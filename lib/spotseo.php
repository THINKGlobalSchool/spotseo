<?php
/**
 * Elgg Spot SEO Helper Lib
 *
 * @package SpotSEO
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2013
 * @link http://www.thinkglobalschool.com/
 *
 */

/**
  * Get current page segments suitable for a language string
  *
  * @return mixed (string or FALSE if invalid)
  */
function spotseo_get_current_page_segment_string() {
	// Get and check for valid current url
	if ($url = parse_url(current_page_url())) {
		// Strip out query string
		$url = sprintf('%s://%s%s', $url['scheme'], $url['host'], $url['path']);

		// Strip out site url to get segment
		$url = str_replace(elgg_get_site_url(), '', $url);

		// Strip trailing slashes
		$url = rtrim($url, '/');

		// Replace / with :
		$url = str_replace('/', ':', $url);

		if (!$url) {
			$url = 'index';
		}

		return $url;
	}
	return FALSE;
}