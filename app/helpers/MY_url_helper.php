<?

function translate($language, $title = '', $attributes = '')
{

		$title = (string)$title;

		$site_url = '/'.$language.uri_string();

		if ($title == '')
		{
			$title = $site_url;
		}

		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
		}

		return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
}



if(!function_exists('force_https')) {
    /**
     * If the current request isn't over https, perform an
     * HTTP 301 redirect.
     */
	function force_https() {
		if(is_ssl() === false){
			redirect(str_replace('http:', 'https:', current_url()), 'location', 301);
		}
	}
}



if(!function_exists('shorturl_href')) {
    /**
     * Detects if link exists.
     */
	function shorturl_href($ref_id) {
		$CI =& get_instance();
		return $CI->url_model->link_by_id($ref_id);
	}
}


if(!function_exists('is_ssl')) {
    /**
     * Determines if SSL is enabled.
     */
    function is_ssl() {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
    }
}
if(!function_exists('is_secure')) {
    /**
     * Determines if SSL is enabled.
     */
    function is_secure() {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
    }
}

?>