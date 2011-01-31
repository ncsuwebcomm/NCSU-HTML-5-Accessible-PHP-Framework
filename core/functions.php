<?php
/**
 * function bodyAttributes
 * Creates classes for body tag | @return string
 */

function bodyAttributes() {

	global $config;
	
	if(empty($config['headerBg']) || $config['headerBg'] == NULL) {
		$config['headerBg'] = 'white';
		$config['headerColor'] = 'red';	
	}
	
	if(($config['headerBg'] == 'red') || ($config['headerBg'] == 'black')) {
		$body_attributes = 'bg '. $config['headerBg'].'bg';
		return $body_attributes;	
	}
	
	$body_attributes = $config['headerBg'].'bg' ;
	return $body_attributes;
}


/**
 * function asset_url
 * Get url of an asset based on user defined ROOT_URL | @param Asset $asset path to asset from ROOT_URL constant | @return string
 *
 * Example use: <?php echo asset_url('images/someimage.jpg'); ?>
 */


function asset_url($asset) {

	static $path = ROOT_URL;

	$pattern = '~^.+/([^/]+)\.(html|htm|xhtml|xht|xml|mht|mhtml|asp|aspx|adp|bml|cfm|cgi|ihtml|jsp|las|lasso|lassoapp|pl|php|php3|php4|php5|phps|phtml|shtml|stm|atom|eml|metalink|met|rss|css|xslt|xsl|tpl)$~';
	
	preg_match ($pattern, $path, $matches);
	
	if ($matches) {
	
		$filename = $matches[1] . '.' . $matches[2];
		
		$path = str_replace($filename, '', $path);
	
	} elseif ( substr($path, -1) != '/') {
	
		$path = $path . '/';
	
	} 
	
	return $path . $asset;

}

?> 