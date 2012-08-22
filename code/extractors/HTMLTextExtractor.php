<?php

/**
 * Text extractor that uses php function strip_tags to get just the text. OK for indexing, not the best for readable text.
 * @author mstephens
 *
 */
class HTMLTextExtractor extends FileTextExtractor {
	
	function isAvailable() {
		return true;	
	}

	function supportedExtensions() {
		return array("html", "htm", "xhtml");
	}

	/**
	 * Lower priority because its not the most clever HTML extraction. If there is something better, use it
	 * @var unknown_type
	 */
	public static $priority = 10;

	function getContent($path) {
		$content = file_get_contents($path);
		return strip_tags($content);
	}
}

?>